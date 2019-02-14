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
<<<<<<< HEAD
Route::resource('stores', 'StoreController');
=======
Route::resource('products', 'ProductController');

>>>>>>> f0632aafab5cf07f72fb2a4ae3ac56e8e730b562

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* this is needed for changes in the user edit.blade */
<<<<<<< HEAD
Route::get('/auth/{user}/edit','UserController@edit');
// Route::resource('user', 'UserController');
//Route::patch('/auth/{user}','UserController@update');
Route::patch('/auth/{user}/update', ['as' =>'auth.update', 'uses' => 'UserController@update']);

=======
// Route::get('users/{user}',  ['as' => 'users.edit', 'uses' => 'UserController@edit']);
// Route::patch('users/{user}/update',  ['as' => 'users.update', 'uses' => 'UserController@update']);


Route::resource('cart', 'CartController');
//Route::view('/cart', 'cart');
//Route::view('/checkout', 'checkout');
>>>>>>> 3777668a21b95d527bb44f296bd21c08c80b40a7
