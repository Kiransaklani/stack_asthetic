<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/products', [HomeController::class, 'products']);
Route::get('/services', [HomeController::class, 'services']);
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/contact/inquiry', [HomeController::class, 'storeContactInquiry'])->name('contact.inquiry');
Route::get('/product/{slug}', [HomeController::class, 'product']);