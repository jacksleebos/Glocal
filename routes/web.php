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

Route::resource('categories', 'CategoryController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* this is needed for changes in the user edit.blade */
Route::get('/auth/{user}/edit','UserController@edit');
// Route::resource('user', 'UserController');
//Route::patch('/auth/{user}','UserController@update');
Route::patch('/auth/{user}/update', ['as' =>'auth.update', 'uses' => 'UserController@update']);

