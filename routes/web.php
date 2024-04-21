<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class, "homepage"])->name("homepage");


Route::get('/musics/detail/{id}', [PublicController::class, "detail"])->name('musics.detail');

Route::get('/contact-us', [ContactController::class, 'contactUs'])->name('contactUs');

Route::post('/contact-us/submit', [ContactController::class, 'submit'])->name('contact.submit');

