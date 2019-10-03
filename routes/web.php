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
Route::get('/', 'HomeController@index')->name('home');
/*Route::get('categories', 'CategoryController@index')->name('categories.index');*/
Route::get('categories/{category}/products', 'CategoryController@products')->name('categories.products');
/*Route::get('/', function () {
    return view('welcome');
})->name('home');*/
Route::get('thu-xem/{id}','ProductController@getProductDetailById')->name('thuxem');
Route::get('shop', 'ProductController@index')->name('shop');
Route::get('shop', 'CategoryController@index')->name('shop');
Route::post('add-to-cart', 'ProductController@addToCart')->name('add_to_cart');
Route::get('cart', 'ProductController@cart')->name('cart');
Route::get('cart/checkout', 'ProductController@showCheckoutForm')->name('cart.show_checkout_form');
Route::post('dat-hang','ProductController@postCheckout')->name('dathang');
Route::get('products/{product}', 'ProductController@show')->name('products.show');
//Comment
Route::post('comments', 'CommentController@store')->name('comments.store');
/*Route::get('products/productdetail', 'ProductController@test')->name('products.show');*/

//Search
Route::get('search', 'SearchController@index')->name('search');

//login logout
Route::get('login', 'LoginController@getLogin')->name('getlogin');
Route::post('login', 'LoginController@postLogin')->name('postlogin');
Route::post('logout', 'LoginController@logout')->name('logout');
//đăng kí
Route::post('dangki', 'HomeController@dangki')->name('dangki');
Route::patch('update-cart', 'ProductController@update');
Route::delete('remove-from-cart', 'ProductController@remove');

//Account
Route::get('addresses', 'UserController@addressById')->name('account.addresses');
Route::get('address/create', 'UserController@createNewAddress')->name('account.address.create');
Route::post('addresses','UserController@storeNewAddress')->name('account.address.storeNewAddress');
Route::get('addresses/{address}/edit', 'UserController@edit')->name('address.edit');
Route::put('addresses/{address}', 'UserController@update')->name('address.update');
Route::delete('addresses/{address}', 'UserController@destroyAddressById')->name('account.address.delete');
//admin
Route::group([
    'middleware' => ['auth', 'is.admin'],
    'prefix'     => 'admin',
    'namespace'  => 'Admin',
    'as'         => 'admin.',
], function () {

    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    //user
    Route::get('users/admin', 'UserController@index')->name('user.index');
    Route::get('user/create', 'UserController@create')->name('user.create');
    Route::post('users', 'UserController@store')->name('user.store');
    Route::get('users/{user}/edit', 'UserController@edit')->name('user.edit');
    Route::post('users/{user}', 'UserController@update')->name('user.update');
    Route::delete('users/{id}', 'UserController@destroy')->name('user.delete');

    //Manager Product
    Route::get('products', 'ProductController@index')->name('products.index');
    Route::get('products/create', 'ProductController@create')->name('product.create');
    Route::post('products', 'ProductController@store')->name('product.store');
    Route::get('products/{product}/edit', 'ProductController@edit')->name('products.edit');
    Route::put('products/{product}', 'ProductController@update')->name('products.update');
/*    Route::delete('products/{id}', 'ProductController@destroy')->name('product.destroy');*/
    Route::delete('products/{product}', 'ProductController@destroy')->name('product.delete');

        //Comment
    Route::get('comments', 'CommentController@index')->name('comments.index');
    Route::get('comments/{comment}', 'CommentController@show')->name('comments.show');
    Route::put('comments/{comment}', 'CommentController@update')->name('comments.update');
    Route::delete('comments/{comment}', 'CommentController@destroy')->name('comments.delete');

    //Manager ProductAttribute
    Route::get('products/{product}/create_product_attribute', 'ProductAttributeController@create')->name('products.attribute');
    Route::post('product_attributes', 'ProductAttributeController@store')->name('product_attribute.store');
    //order 
    Route::get('orders', 'OrderController@index')->name('orders.index');
    Route::get('orders/{order}', 'OrderController@show')->name('orders.show');
    Route::put('orders/{order}/status', 'OrderController@updateStatus')->name('orders.update.status');
    Route::delete('orders/{order}', 'OrderController@destroy')->name('orders.delete');

   /// category
   
   Route::get('categories', 'CategoryController@index')->name('categories.index');
   Route::get('categories/create', 'CategoryController@create')->name('categories.create');
   Route::post('categories', 'CategoryController@store')->name('categories.store');
   Route::delete('categories/{category}', 'CategoryController@destroy')->name('categories.delete');

    //Search
    Route::get('search/orders', 'SearchController@searchOrder')->name('search.orders');
});
