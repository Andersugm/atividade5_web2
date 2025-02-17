<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('categories', CategoryController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
