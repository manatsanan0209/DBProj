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

Route::post('getfollows', [UserController::class,'getfollows']);