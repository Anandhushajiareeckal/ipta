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
    Route::resource('culturals', \App\Http\Controllers\Admin\CulturalController::class);
    Route::resource('memorials', \App\Http\Controllers\Admin\MemorialController::class);
    Route::resource('gallery', \App\Http\Controllers\Admin\GalleryController::class);
    Route::resource('videos', \App\Http\Controllers\Admin\VideoController::class);
    Route::resource('literature', \App\Http\Controllers\Admin\LiteratureController::class);
    Route::resource('little', \App\Http\Controllers\Admin\LittleController::class);
    Route::resource('blog', \App\Http\Controllers\Admin\BlogController::class);

    Route::get('/contact', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact.index');
    Route::put('/contact', [App\Http\Controllers\Admin\ContactController::class, 'update'])->name('contact.update');

    Route::get('enquiries', [\App\Http\Controllers\Admin\EnquiryController::class, 'index'])->name('enquiry.index');
    Route::get('enquiries/{enquiry}', [\App\Http\Controllers\Admin\EnquiryController::class, 'show'])->name('enquiry.show');

    Route::get('/settings/edit', [\App\Http\Controllers\Admin\SettingController::class, 'edit'])->name('settings.edit');
    Route::put('/settings/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');

    Route::resource('jana-sangeetham', \App\Http\Controllers\Admin\JanaSangeethamController::class);

});
