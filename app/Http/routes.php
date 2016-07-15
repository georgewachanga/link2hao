<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => 'web'],
    function(){

    Route::auth();
    Route::get('/', function () {
        return view('home.index');
    });
    Route::get('about', function () {
        return view('home.about');
    });
    Route::get('career', function () {
        $careers = App\Career::get();

        return view('home.career')->withCareers($careers);
    });

        Route::get('bikes', function () {
            return view('home.bikes');
        });




        Route::get('/','PagesController@GetIndex');
        Route::get('consultancy','PagesController@GetConsultancy');
        Route::get('marketing','PagesController@GetMarketing');
        Route::get('graphics','PagesController@GetGraphics');
        Route::get('software','PagesController@GetSoftware');
        Route::get('application','PagesController@GetApplication');
        Route::get('market','PagesController@GetMarket');
        Route::get('services','PagesController@GetServices');
        Route::get('webdesign','PagesController@GetWebdesign');
        Route::get('sitemap','PagesController@GetSitemap');
        Route::get('login','PagesController@GetLogin');
        Route::get('blog','PagesController@GetBlog');
        Route::get('about','PagesController@GetAbout');
        Route::get('contact','PagesController@GetContact');
        Route::get('test','PagesController@GetTest');
        Route::get('single','PagesController@GetSingle');
        Route::get('book','PagesController@GetBook');
        Route::get('faq','PagesController@GetFaq');
        Route::get('terms','PagesController@GetTerms');
        Route::get('registration','PagesController@GetRegistration');
        Route::get('advertise','PagesController@GetAdvertise');







        Route::get('career/{id}/{name}', function($id) {
        $career = App\Career::find($id);
        return view('home.view-job')->withCareer($career);
    });

        Route::resource('comment','CommentController');
});


Route::controller('/blog', '\Serverfireteam\blog\BlogController');

Route::auth();

Route::get('/home', 'HomeController@index');





//admin routes

Route::get('dashboard','PagesController@GetDashboard');
Route::get('blank','PagesController@GetBlank');
Route::get('charts','PagesController@GetCharts');
Route::get('compose','PagesController@GetCompose');
Route::get('forms','PagesController@GetForms');
Route::get('grids','PagesController@GetGrids');
Route::get('inbox','PagesController@GetInbox');
Route::get('media','PagesController@GetMedia');
Route::get('tables','PagesController@GetTables');
Route::get('widgets','PagesController@GetWidgets');



