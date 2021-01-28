<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;

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

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/manual', [FrontController::class, 'manual'])->name('manual');

Route::get('lang/{lang}', [FrontController::class, 'lang'])->name('lang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
