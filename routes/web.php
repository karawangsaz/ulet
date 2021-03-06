<?php

use Faker\Factory as Faker;

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
Route::get('/', function () {
    if (Auth::user())
    {
        return redirect('home');
    } else {
        return "
        <a href='/login'>Login</a>
        <a href='/register'>Register</a>
        ";
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['ceklogin']], function () {
    Route::get('/profile', 'ProfileController@index');
    Route::get('/profile/edit', 'ProfileController@edit');
    Route::put('/profile/edit', 'ProfileController@update');
    Route::get('/profile/{id}', 'ProfileController@view');
    
    Route::get('/sector/{slug}', 'MaterialController@view');
    Route::get('/material/{slug}', 'SeriesController@series_list');
    Route::get('/series/{slug}/{id?}', 'SeriesController@view');

    Route::get('/courses', 'SeriesController@edit');
});