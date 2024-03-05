<?php

use App\Http\Controllers\frontend\FrontendController;
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

Route::group(['name' => 'frontend.'], function () {
    Route::get('/', [FrontendController::class, 'home'])->name('home');
    Route::get('/history', [FrontendController::class, 'history'])->name('history');
    Route::get('/events', [FrontendController::class, 'events'])->name('events');
    Route::get('/on_ground', [FrontendController::class, 'on_ground'])->name('on_ground');
    Route::get('/manuals', [FrontendController::class, 'manuals'])->name('manuals');
    Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
    Route::get('/coming-soon', [FrontendController::class, 'comingSoon'])->name('coming-soon');

    // test
    Route::get('/test', [FrontendController::class, 'test'])->name('test');

    //manuals-tree
    Route::get('/manuals_child/{param}', [FrontendController::class, 'manuals_child'])->name('manuals_child');
});
