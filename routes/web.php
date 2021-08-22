<?php

use App\Http\Controllers\ContactFormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AdminSummaryController;
use App\Http\Controllers\AdminTagController;
use App\Http\Controllers\AdminAuthorController;


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
//Admin section
//Send GET request to /login endpoint to access /admin route.
Route::middleware('auth')->group(function() {//middleware('can:auth')?
    //Route to landing page of admin section.
    Route::get('admin', function () {
        return view('admin.index');
    });

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
//Route to about page.
Route::get('/about', function(){
    return view('about');
});
//Route to display all summaries linked to a given tag.
Route::get('tags/{tag:slug}', [TagController::class, 'index']);
//Route to display all summaries of books published by a given author.
Route::get('authors/{author:slug}', [AuthorController::class, 'index']);

//Route to single summary view.
Route::get('summaries/{summary:slug}', [SummaryController::class, 'show']);

//Routes to access and handle contact form.
Route::get('/contact', [ContactFormController::class, 'index']);
Route::post('/contact', [ContactFormController::class, 'handleContactForm']);











