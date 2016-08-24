<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feature;
use App\Image;
use App\Property;
use App\Location;
use Illuminate\Http\Request;
use Gate;
use Response;
use Illuminate\Support\Facades\Input;
use Intervention\Image\ImageManagerStatic as ImageManager;

use App\Http\Requests;
use Illuminate\Support\Facades\App;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth.auth:admin');
    }
    public function index()
    {

        $properties= Property::all();
      return view('admin.property.index',['properties'=>$properties]);

       // return view('home.index',['properties'=>$properties] );
        //$properties=Property::all();
       // return view('home.index', ['properties'=>$properties]);
        //$properties= Property::all();
       // return view('home.index', ['properties'=>$properties]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::lists('name','id');
        $cat = Category::lists('name','id');
        $locs = Location::lists('name','id');
        return view('admin.property.create')->with('features', $features)->withCategories($cat)->withLocations($locs);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $property= new Property([
            'name'=> $request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            'ownerIdNo'=>$request->ownerIdNo,
            'units' => $request->units
        ]);

        $property->save();
        $property->features()->attach($request->features);

        $cat = Category::find($request->category);
        $loc = Location::find($request->location);

        $cat->properties()->save($property);
        $loc->properties()->save($property);


        /**
         * image logic
         */
        $images = $request->file('images');
        if($images != null)
        {
            foreach($images as $image)
            {
                if($image != null)
                {
                    $image_name = 'link2hao_'.$property->id.'_'.time().'.'.$image->getClientOriginalExtension();
                    $counter = 1;
                    while(file_exists(public_path().'/uploads/'.$image_name))
                    {
                        $image_name = 'link2hao_'.$property->id.'_'.time().'_'.$counter.'.'.$image->getClientOriginalExtension();
                        $counter ++;
                    }
                    $image->move(public_path().'/uploads/', $image_name);

                    $image = new Image(['name' => $image_name]);
                    $property->images()->save($image);
                  }

            }
        }


        /**
         * image logic
         */

        /**
         * owner login
         */
        $owner = Owner::where('phone',$request->phone)->first();

        if(!$owner)
        {
            $owner = Owner::create(['fullname' => $request->fullname, 'phone' => $request->phone]);
        }
        $owner->properties()->save($property);


        return redirect('property')->with('id', $property->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);
        $cat = $property->category;
        $loc = $property->location;

        if($cat)
        {
            if($loc)
            {
                $related = Property::where('category_id',$property->category->id)->where('location_id',$property->location->id)->get();
            }
            else
            {
                $related = Property::where('category_id',$property->category->id)->get();
            }
        }
        elseif($loc)
        {
            $related = Property::where('category_id',$property->category->id)->get();
        }
        else
        {
            $related = null;
        }

        return view('admin.property.show',['related' => $related])->with('property',$property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $features = Feature::lists('name','id');
        $cat = Category::lists('name','id');
        $locs = Location::lists('name','id');
        $property = Property::findOrFail($id);

        return view('admin.property.edit',['property' => $property, 'categories' => $cat, 'features' => $features, 'locations' => $locs ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $property = Property::findOrFail($id);
        $property->update([
            'name'=> $request->name,
            'description'=>$request->description,
            'price'=>$request->price,
            ''=>$request->ownerIdNo,
            'units' => $request->units
        ]);

        return \Redirect::route('property.show', array('id' => $property->id))->with('message', 'Property updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function createImages($id)
    {

        $property = Property::findOrFail($id);
        if($property){
            return view('admin.property.create_images')->with('property', $property);
        }
        else
        {
            return "something went wrong";
        }

    }

    public function storeImages(Request $request)
    {

        $property = Property::findOrFail($request->property_id);

        if(!$property)
        {
            return Response::json('error, property does not exist!!', 400);
        }

        $image = $request->file('file');
        if($image != null)
        {
            $image_name = 'link2hao_'.$property->id.'_'.time().'.'.$image->getClientOriginalExtension();
            $counter = 1;
            while(file_exists(public_path().'/uploads/'.$image_name))
            {
                $image_name = 'link2hao_'.$property->id.'_'.time().'_'.$counter.'.'.$image->getClientOriginalExtension();
                $counter ++;
            }
            /*$manager = new ImageManager();
            $image = $manager->make($image)->resize(600,480);
            $image->insert('images/watermark.png')->save('uploads/'.$image_name);*/
            $image->move(public_path().'/uploads/', $image_name);
            $image = new Image(['name' => $image_name]);
            $property->images()->save($image);

            return Response::json([
                'success' => true,
                'image_name' => $image_name,
                'code' => 200], 200);

        }
        else{
            return Response::json('error, unable to upload', 400);
        }
    }

    public function deleteImage()
    {
        $name = Input::get('id');
        if(!$name){
            return Response::json([
                'error' => true,
                'message' => $name,
                'code' => 400
            ],400);
        }
        $image = Image::where('name','like',$name)->first();
        if(empty($image))
        {
            return Response::json([
                'error' => true,
                'message' => $name,
                'code' => 400
            ],400);
        }
        $image->deleteImage();

        return Response::json(
            ['success' => true,
            'message' => $name + ' deleted',
                'code' => 200
            ], 200
        );

    }

    public function getImages($id)
    {
        $property = Property::findOrFail($id);
        if(!$property)
        {
            return Response::json('error, property does not exist!!', 400);
        }

        $property_images = $property->images()->lists('name')->all();

        return Response::json($property_images,200);
    }

}
