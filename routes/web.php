<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('maintain', function () {
    return view('maintain');
})->name('maintain');

Route::get('follow', function () {
    return view('follow');
})->name('follow');

Route::get('signin', function () {
    return view('signin');
})->name('signin');

Route::get('admin', function () {
    return view('employee_login');
})->name('admin');

Route::get('admin/order', function () {
    return view('adminorder');
})->name('admin/order');



Route::post('getfollows', [UserController::class,'getfollows']);