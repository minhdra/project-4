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
use App\Http\Controllers\api\atuhorsController;
use App\Http\Controllers\api\book_authorsController;
use App\Http\Controllers\api\book_languagesController;
use App\Http\Controllers\api\BookController;
use App\Http\Controllers\api\booksController;
use App\Http\Controllers\api\categoriesController;
use App\Http\Controllers\api\customer_addressesController;
use App\Http\Controllers\api\customersController;
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
// Route::get('product/getNew', [ProductController::class, 'getNew']);

