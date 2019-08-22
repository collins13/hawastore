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

Route::get('/', 'productController@index');
Route::get('/add-to-cart/{id}', [
  'uses' => 'productController@addToCart',
     'as' => 'product.addToCart']);
Route::get('/shopping-cart', 'productController@getCart');

Route::get('/checkout', 'productController@getCheckout')->name('shop.checkout');
Route::post('checkout', 'productController@postCheckout')->name('checkout');
//Route::post('/checkout', 'productController@postCheckout');
Auth::routes();

Route::get('/profile', 'HomeController@index')->name('Hawa Store');
Route::get('admin', function(){
  return view('admin.index');
})->middleware('role:admin');;

Route::get('/role', 'roleController@index')->name('role');
Route::get('/create', 'roleController@create')->name('admin.create');
Route::post('/strore', 'roleController@store')->name('admin.store');
Route::get('/edit/{id}', 'roleController@edit')->name('admin.edit');
Route::patch('/update/{id}', 'roleController@update')->name('admin.update');
Route::post('/delete{id}', 'roleController@destroy')->name('admin.delete');
Route::get('/products', 'productController@getProduct')->name('products');
Route::post('/products', 'productController@store')->name('products');
Route::get('/categories', 'CategoryController@index')->name('categories');
Route::post('/categories', 'CategoryController@store')->name('categories');



