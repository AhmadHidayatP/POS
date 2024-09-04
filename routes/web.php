<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[App\Http\Controllers\HomeController::class,'index']);

Route::get('/category',[App\Http\Controllers\ProductsController::class,'list']);
Route::get('/category/food-beverage',[App\Http\Controllers\ProductsController::class,'fnb']);
Route::get('/category/beauty-health',[App\Http\Controllers\ProductsController::class,'bnh']);
Route::get('/category/home-care',[App\Http\Controllers\ProductsController::class,'hnc']);
Route::get('/category/baby-kid',[App\Http\Controllers\ProductsController::class,'bnc']);

Route::get('/user/{id}/name/{name}',[App\Http\Controllers\UserController::class,'name']);

Route::get('/transaction',[App\Http\Controllers\POSController::class,'pos']);


