<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/login',[LoginController::class,'login'])->name('login');
Route::get('/products',[ProductsController::class,'index']);
