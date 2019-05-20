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

Route::get('/login','AuthController@getlogin')->middleware('guest')->name('login');
Route::post('/postlogin','AuthController@postlogin')->middleware('guest');
Route::get('/register','AuthController@getregister')->middleware('guest');
Route::post('/postregister','AuthController@postregister')->middleware('guest');
Route::get('/home', function(){
    return view('home');
})->middleware('auth')->name('home');
Route::get('/logout', 'AuthController@logout')->middleware('auth')->name('logout');

Route::get('/{provider}','GoogleController@redirectToProvider');
Route::get('auth/{provider}/callback','GoogleController@handleProviderCallback');