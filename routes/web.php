<?php

use App\Http\Controllers\AdminAuthorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminSummaryController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


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
//Auth
Route::middleware('auth')->prefix('auth')->name('auth.')->group(function() {
    //Route to enable or disable 2FA.
    Route::get('2fa', [AuthController::class, 'manage2FA'])->name('2fa');
});

//Admin section
//Send GET request to /login endpoint to access /admin route.
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function() {
    //Route to landing page of admin section.
    Route::get('', [AdminController::class, 'index']);
    //Resource controller for Summary model.
    Route::resource('summaries', AdminSummaryController::class)->except('show');
    //Resource controller for Tag model.
    Route::resource('tags', AdminTagController::class)->except('show');
    //Resource controller for Author model.
    Route::resource('authors', AdminAuthorController::class)->except('show');
});

//Public section
//Route to landing page of public section.
Route::get('/', [SummaryController::class, 'index']);
//Route to display all summaries linked to a given tag.
Route::get('tags/{tag:slug}', [TagController::class, 'index']);
//Route to display all summaries of books published by a given author.
Route::get('authors/{author:slug}', [AuthorController::class, 'index']);

//Route to single summary view.
Route::get('summaries/{summary:slug}', [SummaryController::class, 'show']);

//Routes to access and handle contact form.
Route::get('/contact', [ContactFormController::class, 'index']);
Route::post('/contact', [ContactFormController::class, 'handleContactForm']);











