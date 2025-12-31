<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/programs/short-course', function () {
    return view('programs/short-course');
})->name('programs.short-course');

Route::get('/programs/regular-program-private', function () {
    return view('programs.regular-program-private');
})->name('programs.regular-program-private');
