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

Route::get('/', 'TechsquareIndia@index');
Route::get('about_us', 'AboutUsController@index');
Route::get('contact_us', 'ContactController@index')->name('contact.create');
Route::get('commercial', 'CommercialController@index');
Route::get('industrial', 'IndustrialController@index');
Route::get('defence', 'DefenceController@index');
Route::post('contact', 'ContactController@store')->name('contact.store');
Route::get('email', 'DefenceController@index');
