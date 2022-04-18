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

Route::get('/', function () {
    return redirect('/shop');
});

Route::get('/shop', function () {
    return view('index');
});

Route::get('/shop/list', function () {
    return view('client.list-products');
});

Route::get('/shop/product', function () {
    return view('client.single-product');
});

Route::get('/shop/cart', function () {
    return view('client.cart');
});

Route::get('/shop/checkout', function () {
    return view('client.checkout');
});

Route::get('/shop/order-received', function () {
    return view('client.order-received');
});

Route::get('/shop/my-account', function () {
    return view('client.my-account');
});

Route::get('/shop/order-tracking', function () {
    return view('client.order-tracking');
});