<?php

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

Route::get('/', function () {
    return redirect('admin/login');
});
// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('dashboard', 'HomeController@index')->name('home');
//Commerical Controlles
Route::get('commercial/index', 'CommercialController@index');
//Defence Controlles
Route::get('defence/index', 'IndustrialController@index');
//Industrial Controlles
Route::get('industrial/index', 'DefenceController@index');
Route::get('logo', 'HomeController@getlogo');
Route::get('logo/delete/{id}', 'HomeController@deletelogo');
Route::post('logo', 'HomeController@postlogo');
Route::get('slides', 'HomeController@getslides');
Route::get('slides/delete/{id}', 'HomeController@deleteslide');
Route::get('slides/resources/{id}', 'HomeController@get_resources');
Route::post('slides', 'HomeController@postslides');
Route::get('thumbnails', 'HomeController@getthumbnails');
Route::get('thumbnails/delete/{id}', 'HomeController@deletethumbnails');
Route::post('thumbnails', 'HomeController@postthumbnails');

Route::get('product', 'HomeController@getcategory');
Route::get('product/delete/{id}', 'HomeController@deletecategory');
Route::post('product', 'HomeController@postcategory');

Route::get('resources', 'HomeController@getresources');
Route::get('resources/delete/{id}', 'HomeController@deleteresources');
Route::get('resources/edit/{id}', 'HomeController@editresources');
Route::post('resources', 'HomeController@postresources');


Route::get('aboutus/{id?}', 'HomeController@getaboutus');
Route::get('aboutus/delete/{id}', 'HomeController@deleteaboutus');
Route::post('about_us', 'HomeController@postaboutus');

Route::get('default', 'HomeController@getdefault');
Route::post('default', 'HomeController@postdefault');
Route::get('default/delete/{id}', 'HomeController@deletedefault');

Route::get('pripolicy', 'HomeController@getpripolicy');
Route::post('pripolicy', 'HomeController@postpripolicy');
Route::get('default/delete/{id}', 'HomeController@deletedefault');




Route::get('maintainance/{value}', 'HomeController@maintainance');
