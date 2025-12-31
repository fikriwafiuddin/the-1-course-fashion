<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/programs/short-course', function () {
    return view('programs/short-course');
})->name('programs.short-course');
