<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactController2;
use App\Http\Controllers\HomeContentController;
use App\Http\Controllers\AboutContentController;


// Route::get('/', function () {
//     TodoController::index();
// })->name("home");
Route::get('/', [TodoController::class, 'index'])->name("home");
Route::post('/', [TodoController::class, 'store'])->name("home");

Route::get('/test', function () {
    return view('layout.app');
});

// DIRECT VIEW LINK - SIMPLE X PERLU PROSES APA2
Route::get('/about', function () {
    return view('about');
})->name("about");

// CONTROLLER LINK - PERLU PROSES
Route::get('/contact', [ContactController::class, 'index'])->name("contact");
Route::resource('home-content', HomeContentController::class);
Route::resource('about-content', AboutContentController::class);
