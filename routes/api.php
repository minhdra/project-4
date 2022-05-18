<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
use App\Http\Controllers\api\address_statusController;
use App\Http\Controllers\api\addressController;
use App\Http\Controllers\api\authorsController;
use App\Http\Controllers\api\book_authorsController;
use App\Http\Controllers\api\book_languagesController;
use App\Http\Controllers\api\BookController;
use App\Http\Controllers\api\booksController;
use App\Http\Controllers\api\categoriesController;
use App\Http\Controllers\api\customer_addressesController;
use App\Http\Controllers\api\customer_infosController;
use App\Http\Controllers\api\customersController;
use App\Http\Controllers\api\delivery_addressesController;
use App\Http\Controllers\api\districtsController;
use App\Http\Controllers\api\invoice_detailsController;
use App\Http\Controllers\api\invoicesController;
use App\Http\Controllers\api\order_detailsController;
use App\Http\Controllers\api\order_statusController;
use App\Http\Controllers\api\ordersController;
use App\Http\Controllers\api\paymentsController;
use App\Http\Controllers\api\positionsController;
use App\Http\Controllers\api\pricesController;
use App\Http\Controllers\api\promotionsController;
use App\Http\Controllers\api\provincesController;
use App\Http\Controllers\api\publishersController;
use App\Http\Controllers\api\rolesController;
use App\Http\Controllers\api\SlideController;
use App\Http\Controllers\api\staffsController;
use App\Http\Controllers\api\wardsController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('books', booksController::class);
Route::resource('invoices', invoicesController::class);
Route::resource('invoice_details', invoice_detailsController::class);
Route::resource('categories', categoriesController::class);
Route::resource('publishers', publishersController::class);
Route::resource('book_languages', book_languagesController::class);
Route::resource('authors', authorsController::class);
Route::resource('customers', customersController::class);
Route::resource('customer_infos', customer_infosController::class);
Route::resource('delivery_addresses', delivery_addressesController::class);
Route::resource('carts', cartsController::class);
Route::resource('cart_details', cart_detailsController::class);
Route::resource('orders', ordersController::class);
Route::resource('order_details', order_detailsController::class);
Route::post('customers/login', [customersController::class, 'login']);
Route::post('customers/register', [customersController::class, 'register']);

Route::post('book/upload', [booksController::class, 'uploadFile'])->name('upload.uploadfile');
Route::get('book/get_basic', [booksController::class, 'get_basic'])->name('book.get_basic');

