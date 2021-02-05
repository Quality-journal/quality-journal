<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\ArticlesController;


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

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('pages', PagesController::class);
    Route::resource('selections', SelectionController::class);
    Route::resource('issues', IssueController::class);
    Route::resource('articles', ArticlesController::class);

});

require __DIR__.'/auth.php';
