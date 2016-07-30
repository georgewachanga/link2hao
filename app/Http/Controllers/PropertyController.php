<?php

namespace App\Http\Controllers;

use App\Category;
use App\Feature;
use App\Image;
use App\Property;
use App\Location;
use Illuminate\Http\Request;
use Gate;

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
        $this->authorize('admin');
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
            'category'=>$request->category,
            'location'=>$request->location,
            'description'=>$request->description,
            'price'=>$request->price,
            'ownerIdNo'=>$request->ownerIdNo,

        ]);
        $property->save();
        $property->features()->attach($request->features);


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

        return redirect('property/show')->with('id', $property->id);

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
        return view('admin.property.show')->with('property',$property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function addFeatures(Request $request)
    {

    }

}
