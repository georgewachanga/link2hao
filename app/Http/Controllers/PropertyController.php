<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class PropertyController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $properties = Property::all();
        return view('properties.index')->with('properties', $properties);
    }
}
