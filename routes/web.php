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
Route::get('clear_cache', function () {
    $config_path = base_path('bootstrap/cache/config.php');
    Artisan::call('cache:clear');
    Artisan::call('optimize');
    Artisan::call('view:clear');
    Artisan::call('config:cache');
    if (file_exists($config_path)) {
        unlink($config_path);
    }
    exec('composer dump-autoload');
});
Route::get('construction', 'TechsquareIndia@construction');
Route::group(['middleware' => ['maintain']], function () {
    Route::get('/', 'TechsquareIndia@index');
    Route::get('aboutus', 'AboutUsController@index');
    Route::get('contactus', 'ContactController@index')->name('contact.create');
    Route::post('contact', 'ContactController@store')->name('contact.store');
    Route::get('email', 'DefenceController@index');
    Route::get('analysis', 'GoogleController@index');
    Route::get('resources/{type}/{id}', 'TechsquareIndia@resources');
    Route::get('pripolicy', 'TechsquareIndia@pripolicy');
    Route::get('sitemap', 'TechsquareIndia@sitemap');
});
