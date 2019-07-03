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
<<<<<<< HEAD
Route::get('/checkout', 'productController@getcheckout');
Auth::routes();
=======
Auth::routes();

>>>>>>> 624aba843e12b04359d2c8e89398c0ac3d3fa22a
Route::get('/profile', 'HomeController@index')->name('Hawa Store');
