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
//GET to /login endpoint to access /admin route.
Route::middleware('auth')->group(function() {//middleware('can:auth')?
    Route::get('admin', function () {
        return view('admin.index');
    });

    Route::resource('summaries', AdminSummaryController::class)->except('show');
    Route::resource('tags', AdminTagController::class)->except('show');
    Route::resource('authors', AdminAuthorController::class)->except('show');
});

//Public section
Route::get('/', [SummaryController::class, 'index']);
Route::get('tags/{tag:slug}', [TagController::class, 'index']);
Route::get('authors/{author:slug}', [AuthorController::class, 'index']);

Route::get('summaries/{summary:slug}', [SummaryController::class, 'show']);

Route::get('/contact', [ContactFormController::class, 'index']);
Route::post('/contact', [ContactFormController::class, 'handleContactForm']);











