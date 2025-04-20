<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\ExhibitionController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider, and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', TestController::class);

Route::get('/', HomeController::class);
Route::get('/uhu', [GalleryController::class, 'uhu']);
Route::get('/gallery', [GalleryController::class, 'show']);
Route::get('/gallery/{gallery}', [GalleryController::class, 'show']);
Route::get('/slide/{slide}', [MediaController::class, 'show']);


Route::get('/exhibition', ExhibitionController::class);
Route::get('/exhibition/{exhibition}', ExhibitionController::class);

Route::feeds();

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/{page?}', ContentController::class);
