<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Property;
use Illuminate\Support\Facades\Input;
use Validator;
use Response;
use File;


class BookingController extends Controller
{
    public function getIndex($id, $name )
    {
        $property = Property::find($id);

        if ($property->name !== $name){
            return redirect()->back()->withErrors('something unexpected happened,try again');
        }
        return view('home.terms')->with('property',$property);

    }

    public function confirmTerms(Request $request)
    {
        if($request->accept)
        {
            return view('home.info')->withMessage('Let us finalize some details, Our term Member will contact you as soon as possible');
        }
        else
        {
            return back()->withErrors('you must accept our terms to proceed');
        }

    }

    public function post_image(Request $request)
    {
        $input = Input::all();
        $rules  = array(
         //   'file' => 'image|max:3000',
        );

        $validation = Validator::make($input, $rules);

        if($validation->fails())
        {
            return Response::make($validation->errors()->first(), 400);

        }
        $file = $request->file('file');
        if($file){
            $extension = $file->getClientOriginalExtension();
            $directory = public_path().'/uploads/';
            $filename = 'maknus'.time().".{$extension}";

            $upload_success = $file->move( $directory, $filename);

        }
        else{
            return Response::json('file not there',400);
        }


        if($upload_success){
            return Response::json('success', 200);
        }
        else{
            return Response::json('error', 400);
        }
    }

    public function get_image()
    {
        return view('admin.property.create_images');
    }

}
