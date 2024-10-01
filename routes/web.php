<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\Backend\BeritaController as BackendBeritaController;
use App\Http\Controllers\Backend\KontenController as BackendKontenController;
use App\Http\Controllers\Frontend\BeritaController as FrontendBeritaController;
use App\Http\Controllers\Frontend\ContentController as FrontendKontenController;
use App\Http\Controllers\Frontend\GalleryController as FrontendGalleryController;
use App\Http\Controllers\Frontend\ContestController as FrontendContestController;
use App\Http\Controllers\Frontend\InternController as FrontendInternController;
use App\Http\Controllers\Frontend\ActivityController as FrontendActivityController;
use App\Http\Controllers\Frontend\AchievementController as FrontendAchievementController;
use App\Http\Controllers\MessageController as FrontendMessageController;


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

Route::get('/', [LandingController::class, 'index']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/kontak', [LayoutController::class, 'contact']);
Route::get('/filosofi', [LayoutController::class, 'filosofi']);
Route::get('/visi', [LayoutController::class, 'visi']);
Route::get('/divisi', [LayoutController::class, 'divisi']);
Route::get('/activity-doc', [LayoutController::class, 'activityDoc']);
// Route::get('/content', [LayoutController::class, 'content']);
Route::get('/about', [LayoutController::class, 'about']);
Route::get('/sentimeter', [LayoutController::class, 'sentimeter']);
Route::get('/hmti-esport', [LayoutController::class, 'hmtiEsport']);
Route::get('/tech-fest', [LayoutController::class, 'techFest']);
Route::get('/danus', [LayoutController::class, 'danus']);
// Route::get('/news', [LayoutController::class, 'news'])->name('news');
Route::get('/info', [LayoutController::class, 'info']);
Route::get('/bph', [LayoutController::class, 'bph'])->name('bph');
Route::get('/kominfo', [LayoutController::class, 'kominfo'])->name('kominfo');
Route::get('/danuss', [LayoutController::class, 'danuss'])->name('danuss');
Route::get('/hukam', [LayoutController::class, 'hukam'])->name('hukam');
Route::get('/kaderisasi', [LayoutController::class, 'kaderisasi'])->name('kaderisasi');
Route::get('/minatbakat', [LayoutController::class, 'minatbakat'])->name('minatbakat');
Route::get('/psdm', [LayoutController::class, 'psdm'])->name('psdm');
Route::get('/humas', [LayoutController::class, 'humas'])->name('humas');
// Route::get('/activity', [LayoutController::class, 'activity']);
Route::get('/activity/{id}/details', [LayoutController::class, 'activityDetails']);
// Route::get('/contest', [LayoutController::class, 'contest']);
// Route::get('/internship', [LayoutController::class, 'internship']);
// Route::get('/achievement', [LayoutController::class, 'achievement']);
Route::get('galery', [FrontendGalleryController::class, 'index']);
Route::get('galery/{id}', [FrontendGalleryController::class, 'show']) -> name('galery.show');
route::get('galery/filter', [FrontendGalleryController::class, 'yearFilter']) -> name('galery.filter');


// Route::get('berita', [FrontendBeritaController::class, 'inroute::post('galery/index ', [FrontendGalleryController::class, 'show'])dex']);



Route::resource('contest', FrontendContestController::class);
Route::resource('internship', FrontendInternController::class);
Route::resource('news', FrontendBeritaController::class);
Route::resource('activity', FrontendActivityController::class);
Route::resource('achievement', FrontendAchievementController::class);
Route::resource('content', FrontendKontenController::class);
Route::resource('messages', FrontendMessageController::class);


Route::middleware('auth')->group(function() {
    Route::resource('blogs', BlogController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('produks', ProdukController::class);
    Route::resource('beritas', BackendBeritaController::class);
    Route::resource('contents', BackendKontenController::class);
    Route::resource('activities', ActivityController::class);
    Route::resource('account', AccountController::class);
    // Route::resource('messages', MessageController::class);
});

require __DIR__ . '/auth.php';
