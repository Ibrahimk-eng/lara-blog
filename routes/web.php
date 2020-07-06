<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/products', 'ProductsController@index')->name('products');
Route::get('/products/add', 'ProductsController@addProduct')->name('products.add');
Route::post('/products/add', 'ProductsController@storeProduct')->name('products.store');
Route::get('/products/edit/{id}', 'ProductsController@editProduct')->name('products.edit');
Route::post('/products/edit/{id}', 'ProductsController@updateProduct')->name('products.update');
Route::post('/products/delete/{id}', 'ProductsController@deleteProduct')->name('products.delete');

