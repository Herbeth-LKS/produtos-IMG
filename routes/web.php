<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/create/products', [ProductController::class, 'store']);
Route::get('/list/products/', [ProductController::class, 'index']);
Route::put('/update/products/{code}', [ProductController::class, 'update']);
Route::delete('/delete/products/{code}', [ProductController::class, 'destroy']);
//Route::post('/decrement-stock/products/{code}', [ProductController::class, 'decrementStock']);