<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/porto', [App\Http\Controllers\portoController::class, 'show'])->name('porto');
Route::get('/gas', [App\Http\Controllers\portoController::class, 'index'])->name('gas');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
