<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/users', [UserController::class, 'index']);
