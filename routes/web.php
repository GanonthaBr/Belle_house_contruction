<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;

//Home 
Route::get('/', [HomeController::class, 'index'])->name('home');


//About
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Contact
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');


//services
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service/create', [ServicesController::class, 'create'])->name('service.create');
Route::post('/services', [ServicesController::class, 'store'])->name('service.store');

//blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');


//projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::post('/projects', [ProjectsController::class, 'store'])->name('project.store');
Route::get('/project/create', [ProjectsController::class, 'create'])->name('project.create');

//realisations
Route::get('/realisations', [HomeController::class, 'realisations'])->name('realisations');
