<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/users', [UserController::class, 'index']);

Route::get('admin', function () {
    return view('admin.index');
});

Route::get('/cart', function () {
    return view('cart.index');
});
Route::get('/detailProduct', function () {
    return view('product.detailProduct');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});