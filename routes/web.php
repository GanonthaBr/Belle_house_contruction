<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\Auth\RegisterController;

//Home 
Route::get('/', [HomeController::class, 'index'])->name('home');


//About
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Contact
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/contact/create', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contact.store');
Route::post('/modal', [ModalController::class, 'store'])->name('modal.store');


//services
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/service/create', [ServicesController::class, 'create'])->name('service.create');
Route::post('/services', [ServicesController::class, 'store'])->name('service.store');
Route::get('service/{id}', [ServicesController::class, 'show'])->name('service.show');
Route::get('service/{id}/edit', [ServicesController::class, 'edit'])->name('service.edit');
Route::put('service/{id}', [ServicesController::class, 'update'])->name('service.update');
Route::delete('service/{id}', [ServicesController::class, 'destroy'])->name('service.destroy');
Route::get('allservices', [ServicesController::class, 'allservices'])->name('allservices');

//blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
Route::get('/allblogs', [BlogController::class, 'allblogs'])->name('allblogs');


//projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::post('/projects', [ProjectsController::class, 'store'])->name('project.store');
Route::get('/project/create', [ProjectsController::class, 'create'])->name('project.create');
Route::get('project/{id}', [ProjectsController::class, 'show'])->name('project.show');
Route::get('project/{id}/edit', [ProjectsController::class, 'edit'])->name('project.edit');
Route::put('project/{id}', [ProjectsController::class, 'update'])->name('project.update');
Route::delete('project/{id}', [ProjectsController::class, 'destroy'])->name('project.destroy');
Route::get('/allprojects', [ProjectsController::class, 'allprojects'])->name('allprojects');

//realisations
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisations');
Route::get('realisation/create', [RealisationController::class, 'create'])->name('realisation.create');
Route::post('/realisations', [RealisationController::class, 'store'])->name('realisation.store');
Route::get('/realisation/{id}', [RealisationController::class, 'show'])->name('realisation.show');
Route::get('/realisation/{id}/edit', [RealisationController::class, 'edit'])->name('realisation.edit');
Route::put('/realisation/{id}', [RealisationController::class, 'update'])->name('realisation.update');
Route::delete('/realisation/{id}', [RealisationController::class, 'destroy'])->name('realisation.destroy');
Route::get('/allrealisations', [RealisationController::class, 'allrealisations'])->name('allrealisations');

// partners
Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
Route::get('partner/create', [PartnerController::class, 'create'])->name('partner.create');
Route::post('/partners', [PartnerController::class, 'store'])->name('partner.store');
Route::get('/partner/{id}/edit', [PartnerController::class, 'edit'])->name('partner.edit');
Route::get('/partner/{id}', [PartnerController::class, 'update'])->name('partner.update');
Route::delete('partner/{id}', [PartnerController::class, 'destroy'])->name('partner.destroy');
Route::get('allpartners', [PartnerController::class, 'allpartners'])->name('allpartners');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register-from-blog', [RegisterController::class, 'registerBlog'])->name('registerFromBlog');

// comments
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');

//admin
Route::get('/bhadmin', [HomeController::class, 'admin'])->name('admin');
