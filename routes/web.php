<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get("/singleAd",'FrontEnd\HomeController@adSingle')->name("listings");
Route::get("/",'FrontEnd\HomeController@index')->name("home-view");

//
//Route::get('/', function () {
//    return view('website.index');
//});
Route::get('ads', function () {
    return view('website.ads');
});


Route::get("/view",'FrontEnd\PostAdController@PostAd')->name("post-view")->middleware('auth');
Route::post("/postproduct",'FrontEnd\ProductController@store')->name("post-product")->middleware('auth');


Route::post("/contactus",'FrontEnd\HomeController@postContact')->name("contactus");
Route::get("/contact",'FrontEnd\HomeController@contactme')->name("contact");

Route::get("/about",'FrontEnd\HomeController@about')->name("about");
Route::get("/contact",'FrontEnd\HomeController@contact')->name("contact");
Route::get("/blog",'FrontEnd\HomeController@blog')->name("blog");
Route::resource('post' , 'FrontEnd\PostController');

Route::prefix('admin')->namespace("Admin")->middleware('auth')->group(function () {
    Route::get('home' , function(){return view('dashboard.layouts.app');});
    Route::resource("categories",'CategoryController');
    Route::resource("comments",'CommentController');
    Route::resource("about",'AboutController');
    Route::resource("post",'PostController');
    Route::get("post/delete/{id}",'PostController@destroy')->name('post.delete');
    Route::resource('products' , 'ProductController');
    Route::get("contact_me",'ContactMeController@index')->name('contactme');
    Route::resource("contact_",'ContactMeController');
    
    Route::get("post/edit/{id}",'PostController@edit');
    Route::post("post/edit/{id}",'PostController@update');


Route::get("settings",'SettingController@setting')->name('settings');
Route::post("settings",'SettingController@store')->name('post-settings');


});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('postnewslatteremail' , 'Admin\NewsletterController@create')->name('post.email');
