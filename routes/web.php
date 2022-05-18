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
})->name('home');

Route::get('/shop/list', function () {
    return view('client.list-products');
})->name('shop');

Route::get('/shop/list/{id}', function ($id) {
    return view('client.single-product', ['id'=>$id]);
})->name('single');

Route::get('/shop/cart', function () {
    return view('client.cart');
})->name('cart');

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

/*---------------------------- Administration ------------------------------------ */

Route::get('/admin', function () {
    return view('admin.index');
});

        /*--------------------- example -------------------------- */

Route::get('/admin/extended-table', function () {
    return view('admin.extended-table');
});

Route::get('/admin/regular', function () {
    return view('admin.regular');
});

Route::get('/admin/data-table', function () {
    return view('admin.datatable-example');
});

        /*--------------------- end example -------------------------- */

Route::get('/admin/books', function () {
    return view('admin.books');
});

Route::get('/admin/authors', function () {
    return view('admin.authors');
});

Route::get('/admin/languages', function () {
    return view('admin.languages');
});

Route::get('/admin/publishers', function () {
    return view('admin.publishers');
});

Route::get('/admin/categories', function () {
    return view('admin.categories');
});

Route::get('/admin/invoices', function () {
    return view('admin.invoices');
});







