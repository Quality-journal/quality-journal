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
Route::get('/instructions-for-authors', [FrontController::class, 'instructions'])->name('instructions');
Route::get('/submit-a-paper', [FrontController::class, 'submit_a_paper'])->name('submit_a_paper');
Route::get('/editorial-office', [FrontController::class, 'editorialOffice'])->name('editorialOffice');
Route::get('/reviewers', [FrontController::class, 'reviewers'])->name('reviewers');
Route::get('/publishing-council', [FrontController::class, 'publishingCouncil'])->name('publishingCouncil');
Route::get('/ethics-and-policy', [FrontController::class, 'ethicsAndPolicy'])->name('ethicsAndPolicy');

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
