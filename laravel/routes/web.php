<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// صفحة التسجيل
Route::get('/signup', [AuthController::class, 'showSignup'])->name('signup');
Route::post('/signup', [AuthController::class, 'register'])->name('signup.post');

// صفحة تسجيل الدخول
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// صفحة الداشبورد
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');

// تسجيل الخروج
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/profile', function () {
    return view('auth.profile'); // ده هيقرأ profile.blade.php
})->name('profile')->middleware('auth'); // middleware عشان يكون بس للمسجلين

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/products', function () {
    return view('Products.products');
})->name('products');


Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/pos-features', function () {
    return view('pos-features');
})->name('pos-features');

Route::get('/why-us', function () {
    return view('whyus');
})->name('whyus');

Route::get('/how-it-works', function () {
    return view('how-it-works');
})->name('how-it-works');

Route::get('/dashboard', function () {
    return view('dashboard.index'); // index.blade.php جوه resources/views/dashboard
})->middleware('auth')->name('dashboard');
