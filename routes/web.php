<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


//Home 
Route::get('/', [HomeController::class, 'index']);


//About
Route::get('/about', [AboutController::class, 'index'])->name('about');
