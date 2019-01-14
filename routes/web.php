<?php
use App\Product;
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

Route::get('products','ProductController@index')->name('ProductController.index');

Route::get('products/{product}', 'ProductController@show');

Route::get('rolex','brandController@rolex')->name('brandController.rolex');

Route::get('omega','brandController@omega');

Route::get('rm','brandController@rm');

Route::post('products','ProductController@store');

//Route::put('products/{product}','ProductController@update');

Route::post('update','ProductController@update');

Route::post('delete/id', 'ProductController@deleteId');

Route::post('delete/title','ProductController@deleteTitle');

Route::post('delete/availability','ProductController@deleteAvailability');
