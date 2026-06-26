<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/artikel', function () {
    return view('artikel');
})->name('artikel');

Route::get('/tentang-kami', function () {
    return view('tentang-kami');
})->name('tentang-kami');
