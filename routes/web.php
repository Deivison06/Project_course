<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [WebController::class, 'home'])->name('home');
Route::get('/curso', [WebController::class, 'course'])->name('course');
Route::get('/blog', [WebController::class, 'blog'])->name('blog');
Route::get('/blog{uri}', [WebController::class, 'article'])->name('article');
Route::get('/contato', [WebController::class, 'contact'])->name('contact');
