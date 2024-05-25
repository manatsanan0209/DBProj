<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('follow', function () {
    return view('follow');
})->name('follow');

Route::post('follow', [UserController::class,'getfollows']);


Route::get('signin', function () {
    return view('user_login');
})->name('signin');

Route::post('signin', [UserController::class,'login']);

Route::get('signout', [UserController::class,'logout'])->name('signout');

Route::get('maintain', [UserController::class,'maintain'])->name('maintain');

Route::get('customer/orders', function () {
    return view('customer/orders');
})->name('orders');

Route::get('customer/waitpayment', [UserController::class,'listwaitpayment'])->name('waitpayment'); 

Route::get('dashboard', function () {
    return view('admin/employee_login');
})->name('dashboard');

Route::get('dashboard/order', function () {
    return view('admin/adminorder');
})->name('d_order');

Route::get('dashboard/technician', function () {
    return view('admin/technician');
})->name('technician');

Route::get('dashboard/customer', function () {
    return view('admin/customer');
})->name('customer');

Route::get('dashboard/assign', function () {
    return view('admin/assign');
})->name('assign');

Route::get('dashboard/assignment/completed', function () {
    return view('technician/completed_assignment');
})->name('completed');

Route::get('dashboard/assignment/inprogress', function () {
    return view('technician/inprogress_assignment');
})->name('inprogress');

Route::get('test', function () {
    return view('payment');
})->name('test');


