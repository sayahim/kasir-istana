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

// welcome

// Route::get('/', function () {
//     return view('welcome');
// });


// auth

Route::get('/', 'Auth\LoginController@index');

Route::get('/admin', 'Auth\LoginController@Store')->name('admin');


// dashboard

// Route::get('/', 'Kasir\KasirController@index');


// kasir

Route::get('/kasir', 'Kasir\KasirController@kasir')->name('transaksi');

// Route::get('/dashboard', 'Kasir\KasirController@index')->name('dashboard_kasir');


// OWNER Admin

// nav bar 

Route::get('/dashboard', 'Owner\OwnerController@index')->name('dashboard');

Route::get('/product-create', 'Product\ProductController@product_create')->name('product_create');

// Product

Route::resource('/products','Product\ProductController');

Route::get('/product', 'Product\ProductController@index')->name('product');

// CRUD
Route::post('/input-product', 'Product\ProductController@store')->name('input_product');
Route::delete('/destroy-product/{id}', 'Product\ProductController@destroy')->name('destroy_product');
// Route::get('/edit-product/{id}', 'Product\ProductController@edit')->name('edit_product');




