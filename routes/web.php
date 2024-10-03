<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\RealisationController;
use App\Http\Controllers\Auth\RegisterController;



//admin

//protected Routes
Route::group(['middleware' => ['auth']], function () {
    //the routes go here...
    Route::get('/bhadmin', [HomeController::class, 'admin'])->name('admin');
    Route::get('realisation/create', [RealisationController::class, 'create'])->name('realisation.create');
    Route::post('/realisations', [RealisationController::class, 'store'])->name('realisation.store');
    Route::get('/realisation/{id}/edit', [RealisationController::class, 'edit'])->name('realisation.edit');
    Route::put('/realisation/{id}', [RealisationController::class, 'update'])->name('realisation.update');
    Route::delete(
        'realisation/{id}',
        [RealisationController::class, 'destroy']
    )->name('realisation.destroy');


    Route::get('project/{id}/edit', [ProjectsController::class, 'edit'])->name('project.edit');
    Route::put('project/{id}', [ProjectsController::class, 'update'])->name('project.update');
    Route::delete('/project/delete/{id}', [ProjectsController::class, 'destroy'])->name('project.destroy');
    Route::post('/projects', [ProjectsController::class, 'store'])->name('project.store');
    Route::get('/project/create', [ProjectsController::class, 'create'])->name('project.create');



    Route::get(
        '/blog/{id}/edit',
        [BlogController::class, 'edit']
    )->name('blog.edit');
    Route::put('/blog/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blogs', [BlogController::class, 'store'])->name('blog.store');



    Route::get(
        'service/create',
        [ServicesController::class, 'create']
    )->name('service.create');
    Route::post('/services', [ServicesController::class, 'store'])->name('service.store');
    Route::get('service/{id}/edit', [ServicesController::class, 'edit'])->name('service.edit');
    Route::put('service/{id}', [ServicesController::class, 'update'])->name('service.update');
    Route::delete('service/delete/{id}', [ServicesController::class, 'destroy'])->name('service.destroy');


    Route::get(
        'partner/create',
        [PartnerController::class, 'create']
    )->name('partner.create');
    Route::post('/partners', [PartnerController::class, 'store'])->name('partner.store');
    Route::get('/partner/{id}/edit', [PartnerController::class, 'edit'])->name('partner.edit');
    Route::put('/partner/{id}', [PartnerController::class, 'update'])->name('partner.update');
    Route::delete('partner/{id}', [PartnerController::class, 'destroy'])->name('partner.destroy');
});

//Home 
Route::get('/', [HomeController::class, 'index'])->name('home');


//About
Route::get('/about', [AboutController::class, 'index'])->name('about');

//Contact
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/messages', [ContactsController::class, 'messages'])->name('messages');
Route::delete('/messages/{id}', [ContactsController::class, 'delete'])->name('message.destroy');
Route::get('/messages/{id}', [ContactsController::class, 'show'])->name('message.show');
Route::get('/contact/create', [ContactsController::class, 'create'])->name('contact.create');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contact.store');
Route::post('/modal', [ModalController::class, 'store'])->name('modal.store');




//blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');
Route::get('/allblogs', [BlogController::class, 'allblogs'])->name('allblogs');




//projects
Route::get('/projects', [ProjectsController::class, 'index'])->name('projects');
Route::get('project/{id}', [ProjectsController::class, 'show'])->name('project.show');
Route::get('/allprojects', [ProjectsController::class, 'allprojects'])->name('allprojects');


//realisations
Route::get('/realisations', [RealisationController::class, 'index'])->name('realisations');
Route::get('/allrealisations', [RealisationController::class, 'allrealisations'])->name('allrealisations');
Route::get('/realisation/{id}', [RealisationController::class, 'show'])->name('realisation.show');


// partners
Route::get('/partners', [PartnerController::class, 'index'])->name('partners');
Route::get('allpartners', [PartnerController::class, 'allpartners'])->name('allpartners');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/register-from-blog', [RegisterController::class, 'registerBlog'])->name('registerFromBlog');

// comments
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::delete('/comment/{id}', [CommentController::class, 'destroy'])->name('comments.destroy');





//services
Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('service/{id}', [ServicesController::class, 'show'])->name('service.show');
Route::get('allservices', [ServicesController::class, 'allservices'])->name('allservices');


//stats
Route::get('/stats', [HomeController::class, 'stats'])->name('stats');
Route::get('/stats/edit/{id}', [HomeController::class, 'stats_edit'])->name('stats.edit');
Route::put('/stats/{id}', [HomeController::class, 'stats_update'])->name('stats.update');
