<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/items', function () {
    return view('item');
})->name('item');

Route::get('/pictures', function () {
    return view('picture');
})->name('picture');

