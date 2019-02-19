<?php
use App\Product;
use Illuminate\Support\Facades\Input;
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
Route::resource('products', 'ProductController');
Route::resource('favorites', 'FavoriteController');

Route::resource('products/admin', 'ProductController');

// ---------------------------------------------------------------------------------------------
/* Route::get('/productsx', function () {
    $products=Product::all();
    return view('products.show' )->withDetails($products);
});
 */// ---------------------------------------------------------------------------------------------



/*
Route::get('/productsx', function () {
    $products=Product::all();
    return view('products.users.test' )->withDetails($products);
});

 */


Route::get('/products2order', function () {
    $products=Product::all();
    return view('products.users.listview' )->withDetails($products);
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/auth/{user}/edit','UserController@edit');

Route::patch('/auth/{user}/update', ['as' =>'auth.update', 'uses' => 'UserController@update']);


Route::resource('cart', 'CartController');
Route::resource('stores', 'StoreController');
Route::resource('orders', 'OrderController');

//Route::view('/cart', 'cart');
//Route::view('/checkout', 'checkout');

Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::any('/search',function(){
    $q = Input::get ( 'q' );
    $products = Product::where('productName','LIKE','%'.$q.'%')->get();
    if(count($products) > 0)
    return view('/orders/create')->withDetails($products)->withQuery ( $q );
    else return view ('/orders/create')->withMessage('No Products found. Try to search again !');
});
