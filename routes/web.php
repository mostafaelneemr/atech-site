<?php

use App\Modules\Web\WebController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', 'WebController@index')->name('web.web.index');


Route::get('/', [WebController::class, 'index'])->name('home');
Route::get('/about', [WebController::class, 'about'])->name('about');
Route::get('/blog/{slug}', [WebController::class, 'blog'])->name('blog');
Route::get('/service', [WebController::class, 'service'])->name('service');
Route::get('/portfolio', [WebController::class, 'service'])->name('portfolio');
Route::get('/contact', [WebController::class, 'contact'])->name('contact');
Route::get('/blogs', [WebController::class, 'blogs'])->name('blogs');

Route::get('/project/{slug}', [WebController::class, 'ProjectSlug'])->name('project.slug');
