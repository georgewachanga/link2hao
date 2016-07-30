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



// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');




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

        Route::resource('location','LocationController');
        Route::resource('category','CategoryController');
        Route::resource('property','PropertyController');
        Route::resource('owner','OwnerController');
        Route::resource('features','FeatureController');
        Route::resource('subscription','SubscriptionController');
        Route::resource('contact','ContactController');



        Route::get('/','PagesController@GetIndex');
        Route::get('consultancy','PagesController@GetConsultancy');
        Route::get('pay','PagesController@GetPay');
        Route::get('marketing','PagesController@GetMarketing');
        Route::get('graphics','PagesController@GetGraphics');
        Route::get('software','PagesController@GetSoftware');
        Route::get('application','PagesController@GetApplication');
        Route::get('market','PagesController@GetMarket');
        Route::get('services','PagesController@GetServices');
        Route::get('webdesign','PagesController@GetWebdesign');
        Route::get('sitemap','PagesController@GetSitemap');
        Route::get('blog','PagesController@GetBlog');
        Route::get('about','PagesController@GetAbout');
        Route::get('contact','PagesController@GetContact');
        Route::get('test','PagesController@GetTest');
        Route::get('single/{id}/{name}','PagesController@GetSingle');
        Route::get('info','PagesController@GetInfo');
        Route::get('faq','PagesController@GetFaq');
        Route::get('terms','PagesController@GetTerms');
        Route::get('registration','PagesController@GetRegistration');
        Route::get('advertise','PagesController@GetAdvertise');
        Route::get('news','PagesController@GetNews');
        Route::get('slide','PagesController@GetSlide');

        Route::post('search', 'PagesController@getIndex');










        Route::get('career', function() {

        return view('home.view-job');
    });
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




Route::auth();

Route::get('/home', 'HomeController@index');
