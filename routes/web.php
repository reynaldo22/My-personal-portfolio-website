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

Route::get('/home', 'HomeController@index')->middleware('auth');
Route::get('/','IndexController@index');
Route::get('/home','HomeController@aboutAdmin')->middleware('auth');

Route::post('/input/add-about','HomeController@addAbout');
Route::get('/home/input', 'HomeController@inputAdmin');
Route::get('/home/{id}/input','HomeController@editAbout');
Route::post('/home/{id}/update','HomeController@updateAbout');
Route::get('/home/{id}/delete','HomeController@destroyAbout');