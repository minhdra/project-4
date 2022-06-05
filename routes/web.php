<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;
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

Route::post('/shop?category={category}&keyword={keyword}', function ($category, $keyword) {
    return view('client.list-products', ['category' => $category, 'keyword' => $keyword]);
})->name('search');

Route::get('/shop/list/{id}', function ($id) {
    return view('client.single-product', ['id'=>$id]);
})->name('single');

Route::get('/shop/cart', function () {
    return view('client.cart');
})->name('cart');

Route::get('/shop/checkout', function () {
    return view('client.checkout');
})->name('checkout');

Route::get('/shop/order-received', function () {
    return view('client.order-received');
})->name('order.received');

Route::get('/shop/my-account', function () {
    return view('client.my-account');
})->name('customer.account');

Route::get('/shop/order-tracking', function () {
    return view('client.order-tracking');
});

Route::get('api/generate-pdf/{id}/{staffName}', [PDFController::class, 'generatePDF']);

/*---------------------------- Administration ------------------------------------ */

Route::get('/admin', function () {
    return view('admin.index');
});

Route::get('/admin/login', function () {
    return view('admin.login');
})->name('admin.login');

Route::get('/admin/books', function () {
    return view('admin.books');
});

Route::get('/admin/authors', function () {
    return view('admin.authors');
});

Route::get('/admin/orders', function () {
    return view('admin.orders');
});
Route::get('/admin/orders/now', function () {
    return view('admin.orders');
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







