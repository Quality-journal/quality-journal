<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\IssueController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\SelectionController;
use App\Http\Controllers\BrowseIssuesController;


Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/about', [FrontController::class, 'about'])->name('about');
Route::get('/instructions-for-authors', [FrontController::class, 'instructions'])->name('instructions');
Route::get('/submit-a-paper', [FrontController::class, 'submit_a_paper'])->name('submit_a_paper');
Route::get('/editorial-board', [FrontController::class, 'editorialOffice'])->name('editorialOffice');
Route::get('/review-process', [FrontController::class, 'reviewers'])->name('reviewers');
Route::get('/publishing-council', [FrontController::class, 'publishingCouncil'])->name('publishingCouncil');
Route::get('/ethics-and-policy', [FrontController::class, 'ethicsAndPolicy'])->name('ethicsAndPolicy');
Route::get('/search', [SearchController::class, 'index'])->name('search');
Route::get('/browse-issues', [BrowseIssuesController::class, 'index'])->name('browseIssues');
Route::get('/selection/{selection}', [BrowseIssuesController::class, 'issues'])->name('selection');
Route::get('/issue/{selection}/{issue}', [BrowseIssuesController::class, 'articles'])->name('issue');
Route::get('/article/{article}', [BrowseIssuesController::class, 'article'])->name('article');
Route::get('/search/searching', [SearchController::class, 'searching'])->name('searching');
Route::get('/sendmail', [FrontController::class, 'sendmail'])->name('sendmail');


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('pages', PagesController::class);
    Route::resource('selections', SelectionController::class);
    Route::resource('issues', IssueController::class);
    Route::resource('articles', ArticlesController::class);
    Route::resource('photos', ImagesController::class);
    Route::resource('documents', DocumentsController::class);
});

require __DIR__ . '/auth.php';
