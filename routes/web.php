<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');

//about us
    Route::get('/about-us', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');

    Route::get('/news', [App\Http\Controllers\Frontend\NewsController::class, 'index'])->name('news');

    Route::get('/news/{slug}', [App\Http\Controllers\Frontend\NewsController::class, 'show'])->name('news.show');


Route::get('/articles', [\App\Http\Controllers\Frontend\ArticleController::class, 'index'])->name('articles');

Route::get('/articles/{slug}', [\App\Http\Controllers\Frontend\ArticleController::class, 'show'])->name('articles.show');



Route::get('/events', [\App\Http\Controllers\Frontend\EventController::class, 'index'])->name('events');
Route::get('/event/{slug}', [\App\Http\Controllers\Frontend\EventController::class, 'show'])->name('events.show');


Route::get('/culturals', [\App\Http\Controllers\Frontend\CulturalController::class, 'index'])->name('culturals');
Route::get('/culturals/{slug}', [\App\Http\Controllers\Frontend\CulturalController::class, 'show'])->name('culturals.show');

Route::get('/memorials/{type}', [\App\Http\Controllers\Frontend\MemorialController::class, 'index'])->name('memorials');
Route::get('/memorials/{type}/{slug}', [\App\Http\Controllers\Frontend\MemorialController::class, 'show'])->name('memorials.show');

//gallery
Route::get('/gallery', [App\Http\Controllers\Frontend\GalleryController::class, 'index'])->name('gallery');
Route::get('/gallery/{slug}', [App\Http\Controllers\Frontend\GalleryController::class, 'show'])->name('gallery.show');







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
