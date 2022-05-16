<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedReaderController;
use App\Http\Controllers\FeedController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/following', [FeedReaderController::class, 'index'])->name('page.index');
Route::patch('/following/toggle-read/{id}', [FeedReaderController::class, 'toggleRead'])->name('news.toggle_read');
Route::get('/about', [FeedReaderController::class, 'aboutPage'])->name('page.about');
Route::get('/manage', [FeedReaderController::class, 'managePage'])->name('page.manage');

// manage
Route::get('feeds/refresh', [FeedController::class, 'refresh'])->name('feeds.refresh');
Route::resource('feeds', FeedController::class);




Route::feeds();

