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



// Custom profile
Route::get('/p/{name}', 'ProfileController@index');



// Auth
Route::group(['prefix' => 'auth'], function () {

    Route::get('steam', 'Auth\SteamAuthController@login')->name('auth.steam');
});

// Admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('connections', 'Admin\ConnectionsController@index')->name('connections')->middleware('auth');

    Route::get('/home', 'Admin\HomeController@index')->name('home');
});

Route::get('/csgotest', function () {
    return view('profile.csgo');
});
