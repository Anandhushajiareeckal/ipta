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

//videos
Route::get('/videos', [App\Http\Controllers\Frontend\VideoController::class, 'index'])->name('videos');

Route::get('/literature/{type}', [\App\Http\Controllers\Frontend\LiteratureController::class, 'index'])->name('literature');
Route::get('/literature/{type}/{slug}', [\App\Http\Controllers\Frontend\LiteratureController::class, 'show'])->name('literature.show');

//little
Route::get('/little', [\App\Http\Controllers\Frontend\LittleController::class, 'index'])->name('little');
Route::get('/little/{slug}', [\App\Http\Controllers\Frontend\LittleController::class, 'show'])->name('little.show');

//blog
Route::get('/blog', [\App\Http\Controllers\Frontend\BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [\App\Http\Controllers\Frontend\BlogController::class, 'show'])->name('blog.show');


Route::get('/jana-sangeetham', [\App\Http\Controllers\Frontend\JanaSangeethamController::class, 'index'])->name('jana-sangeetham');
Route::get('/jana-sangeetham/{slug}', [\App\Http\Controllers\Frontend\JanaSangeethamController::class, 'show'])->name('jana-sangeetham.show');


Route::get('/ipta-theatre', [\App\Http\Controllers\Frontend\IptaTheatreController::class, 'index'])->name('ipta-theatre');
Route::get('/ipta-theatre/{slug}', [\App\Http\Controllers\Frontend\IptaTheatreController::class, 'show'])->name('ipta-theatre.show');


Route::get('/contact-us', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');

Route::post('/enquiry', [App\Http\Controllers\Frontend\EnquiryController::class, 'store'])->name('enquiry.store');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
