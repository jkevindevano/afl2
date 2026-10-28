<?php
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/home', [HomeController::class, 'index']);
Route::get('/product', function () {
    return view('product');
});
Route::get('/contact', [ContactController::class,'show'] );