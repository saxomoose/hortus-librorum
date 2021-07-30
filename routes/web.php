<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SummaryController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthorController;


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

Route::get('/', [SummaryController::class, 'index'])->name('home');
Route::get('tags/{tag:slug}', [TagController::class, 'index']);
Route::get('authors/{author:slug}', [AuthorController::class, 'index']);

Route::get('summaries/{summary:slug}', [SummaryController::class, 'show']);





