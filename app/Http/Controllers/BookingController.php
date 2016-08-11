<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Property;

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

}
