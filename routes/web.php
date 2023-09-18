<?php

use App\Modules\System\SendEmailController;
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
Route::get('/service', [WebController::class, 'service'])->name('service');
Route::get('/portfolio', [WebController::class, 'service'])->name('portfolio');

Route::get('/blogs', [WebController::class, 'blogs'])->name('blogs');
Route::get('/blog/{slug}', [WebController::class, 'blogSlug'])->name('blog.slug');

Route::get('/project/{slug}', [WebController::class, 'projectSlug'])->name('project.slug');
Route::get('/projects', [WebController::class, 'project'])->name('projects');

Route::post('send-email', [SendEmailController::class, 'index'])->name('sendmail');

Route::get('/contact', [WebController::class, 'contact'])->name('contact');