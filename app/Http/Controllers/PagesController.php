<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{

    //frontend routes
    public function getIndex()
    {
        return view('home.index');
    }

    public function getConsultancy()
    {
        return view('home.consultancy');
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
    }public function getBlog()
{
    return view('home.blog');
}public function getAbout()
{
    return view('home.about');
}
    public function getContact()
    {
        return view('home.contact');
    }

    public function getBook()
    {
        return view('home.book');
    }


    public function getSingle()
    {
        return view('home.single');
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


}

