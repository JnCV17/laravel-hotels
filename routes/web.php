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
    return view('welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/display', 'displayController@index');

Route::resource('hotels', 'hotelController');

Route::resource('display', 'displayController');

Route::resource('search', 'searchController');

Route::resource('commentarios', 'commentarioController');