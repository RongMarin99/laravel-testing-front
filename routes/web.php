<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class,'get']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::post('/add_to_card',[ProductController::class,'addToCard']);
    Route::get('/add_to_card',[ProductController::class,'view_cart']);
    Route::post('/update_cart_qty',[CartController::class,'update']);
    Route::get('/checkout',[CartController::class,'checkout']);
    Route::post('/submit_order',[OrderController::class,'store']);
});


Auth::routes();


