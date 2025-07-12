<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController2;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeContentController;
use App\Http\Controllers\AboutContentController;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::resource('home-content', HomeContentController::class);
Route::resource('about-content', AboutContentController::class);
