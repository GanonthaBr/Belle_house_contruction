<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;


//Home 
Route::get('/', [HomeController::class, 'index']);


//About
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Contact
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');


//services
Route::get('/services', [ServicesController::class, 'index'])->name('services');

//blogs
Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');

//projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
