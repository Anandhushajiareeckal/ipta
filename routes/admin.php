<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register admin routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group and "admin" prefix. 
|
*/

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');
    
    // Grouped about routes
    Route::prefix('about')->name('about.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\AboutController::class, 'edit'])->name('edit');
        Route::post('/update', [App\Http\Controllers\Admin\AboutController::class, 'update'])->name('update');
    });


    Route::prefix('news')->name('news.')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\NewsController::class, 'edit'])->name('edit');
        Route::post('/update', [App\Http\Controllers\Admin\NewsController::class, 'update'])->name('update');
    });
    
    //resource rout for news
    Route::resource('news', App\Http\Controllers\Admin\NewsController::class);
    Route::resource('articles', \App\Http\Controllers\Admin\ArticleController::class);
    Route::resource('events', \App\Http\Controllers\Admin\EventController::class);
}); 