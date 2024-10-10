<?php

use App\Http\Controllers\Api\BuyerController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\SellerController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    //buyer route
    Route::resource('buyers', BuyerController::class)->only('index','show');
    //seller routes
    Route::resource('sellers',SellerController::class)->only('index','show');
    //category routes
    Route::resource('categories',CategoryController::class)->except('create','edit');
    //product routes
    Route::resource('products',ProductController::class)->only('index','show');
    //transaction routes
    Route::resource('transactions',TransactionController::class)->only('index','show');
    //user routes
    Route::resource('users',UserController::class)->except('create','edit');
});

