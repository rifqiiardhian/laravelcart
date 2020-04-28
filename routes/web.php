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

Route::get('/', 'HomeController@index');

// Auth Routing
Route::get('/login', 'AuthController@index');
Route::post('/ceklogin', 'AuthController@cek_login');
Route::get('/logout', 'AuthController@logout');

// Product Routing
Route::get('/product', 'ProductController@index');
Route::get('/product/detail/{id}', 'ProductController@detail');

// Transaction Routing
Route::get('/shop/cart', 'ShoppingController@cart');
Route::get('/shop/min', 'ShoppingController@min_jumlah');
Route::get('/shop/plus', 'ShoppingController@plus_jumlah');
Route::get('/shop/cancel/{id}', 'ShoppingController@cancel');
Route::get('/shop/checkout', 'ShoppingController@checkout');
Route::get('/shop/success/{id}', 'ShoppingController@success');
