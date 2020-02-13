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

Route::get('/', function () {
    return view('main');
});

Route::group(['middleware' => ['web'], 'namespace' => '\WebDevEtc\BlogEtc\Controllers'], function () {

    Route::get('/', 'AlbumsController@view');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
