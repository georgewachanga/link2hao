<?php

namespace App\Http\Controllers;

use App\Property;
use App\Category;
use App\Location;
use App\Member;
use Illuminate\Cookie\CookieJar;
use Cookie;
use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    //frontend routes

    public function __construct()
    {

    }
    /**
    public function getIndex()
    {
       // return view('home.index');
       // $properties= Property::all();
        $properties= Property::all();
        $categories = Category::lists('name', 'id');
        $locations = Location::lists('name','id');
        return view('home.index', ['properties'=>$properties, 'categories' => $categories, 'locations' => $locations]);
    }
     */

    public function getConsultancy()
    {
        $this->authorize('owner');
        return view('home.consultancy');
    }
    public function getPay()
    {
        return view('home.pay');
    }
    public function getMarket()
    {
        return view('home.market');
    }
    public function getGraphics()
    {
        return view('home.graphics');
    }
    public function getSoftware()
    {
        return view('home.software');
    }
    public function getServices()
    {
        return view('home.services');
    }
    public function getWebdesign()
    {
        return view('home.webdesign');
    }
    public function getSitemap()
    {
        return view('homesitemap.');
    }
    public function getLogin()
    {
        return view('home.login');
    }

    public function getLoginn()
    {
        return view('home.loginn');
    }

    public function getBlog()
    {
    return view('home.blog');
    }
    public function getAbout()
    {
    return view('home.about');
    }
    public function getContact()
    {
        return view('home.contact');
    }

    public function getInfo()
    {
        return view('home.Info');
    }

    public function getSlide()
    {
        return view('home.slide');
    }


    public function getSingle($id)
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

        return view('home.single')->with('property', $property)->with('related', $related);
    }
    public function getFaq()
    {
        return view('home.faq');
    }

    public function getTerms()
    {
        return view('home.terms');
    }
    public function getRegistration()
    {
        return view('home.registration');
    }
    public function getAdvertise()
    {
        return view('home.advert');
    }


    public function getCareer()
    {
        return view('home..career');
    }


    public function getNews()
    {
        return view('home.news');
    }
//admin admin admin v admin admin admin admin admin admin admin admin admin admin v

    public function getDashboard()
    {
        return view('admin.dashboard');
    }
    public function getCharts()
    {
        return view('admin.Charts');
    }
    public function getCode()
    {
        return view('admin.Code');
    }

    public function getForms()
    {
        return view('admin.forms');
    }
    public function getGrids()
    {
        return view('admin.grids');
    }
    public function getInbox()
    {
        return view('admin.inbox');
    }



    public function getMedia()
    {
        return view('admin.media');
    }
    public function getTables()
    {
        return view('admin.tables');
    }
    public function getWidgets()
    {
        return view('admin.widgets');
    }
    public function getCompose()
    {
        return view('admin.compose');
    }

    public function getIndex( Request $request)
    {
        if($request->cookie('member'))
        {
            dd($request->cookie('member'));
            $member_id = $request->cookie('member');
            $member = Member::find($member_id);
            $member->addVisit(); //profile individual guest
        }
        else
        {
            $member = Member::create();
            $member->addVisit();
            $member_id = $member->id;
        }

        Member::first()->addVisit(); //use first item in table to track total number of visits
        $cookie = Cookie::forever('member',$member_id);//profile member on consecutive visits

        $categories = Category::lists('name', 'id');
        $categories->prepend('Category', 0);
        $locations = Location::lists('name', 'id');
        $locations->prepend('Location', 0);
        $cat = $request->category;
        $loc = $request->location;

        $category = Category::find($cat);

        $location = Location::find($loc);

        if($category)
        {
            if(!$location)
            {
                $properties = $category->properties()->paginate(9);
                if(!$properties)
                {
                    $message = "Sorry we could not Find any ".$category->name;
                }
                else
                {
                    $message = "Available ".$category->name;
                }
            }
            else
            {
                $properties = Property::where('location_id', '=', $location->id)->where('category_id', $category->id)->paginate(9);
                if($properties)
                {
                    $message = "Available ".$category->name." in ".$location->name;
                }
                else
                {
                    $message = "There is no available ".$category->name." in ".$location->name;
                }

            }
        }
        elseif($location)
        {
            $properties = $location->properties()->paginate(9);
            if($properties)
            {
                $message = "Houses in ".$location->name;
            }
            else
            {
                $message = "No Available Houses in ".$location->name;
            }

        }
        else
        {
            $properties = Property::orderBy('created_at','DESC')->paginate(9);
            if($properties)
            {
                $message = "Available Houses";
            }
            else
            {
                $message = "We couldn't find any houses yet!! help us get one";
            }

        }

        return view('home.index', ['properties'=>$properties, 'categories' => $categories, 'locations' => $locations, 'message' => $message])->withCookie($cookie);
    }



}

