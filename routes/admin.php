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


