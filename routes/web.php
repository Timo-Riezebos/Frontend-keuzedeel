<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/eigenjungletuin', function () {
    return view('eigenjungletuin');
});


Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'send'])->name('contact.send');
