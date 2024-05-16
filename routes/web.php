<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

// Route::post('/contact', "", "");

Route::get('/about', function () {
    return view('about');
});



require __DIR__.'/auth.php';
