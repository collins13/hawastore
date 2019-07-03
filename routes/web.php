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
Route::get('/checkout', 'productController@getcheckout');
Auth::routes();
Route::get('/profile', 'HomeController@index')->name('Hawa Store');
