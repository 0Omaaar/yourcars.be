<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
})->name('home');
Route::get('/offers', function () {
    return view('offers.index');
})->name('offers');
Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');
Route::get('/gallery', function () {
    return view('gallery.gallery');
})->name('gallery');


Route::post('/contact', [ContactController::class, 'contact'])->name('contact.store');
