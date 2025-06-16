<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelinkcenteradminController; 
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Models\TravelinkPackage;
use App\Http\Controllers\InteractionController;
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
// home atau index
Route::get('/', function () {
    $topDeals = TravelinkPackage::whereNotNull('promo_price')->take(4)->get();
    $topDestinations = TravelinkPackage::take(4)->get();

    return view('frontend.home', compact('topDeals', 'topDestinations'));
});

// admin
Route::get('/travelink/login', function () {
    return view('auth.login'); // Return the custom login view
})->name('admin.login');

Route::get('/travelinkclub', [\App\Http\Controllers\Frontend\TravelinkPackageController::class, 'club'])->name('travelinkclub');

// Add a route for login to resolve the error
// Route::get('/login', function () {
//     return view('auth.login');
// })->name('login');

// Route untuk proses registrasi
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// Route untuk proses login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

// Route paket travelink
Route::get('/Paket-travel', [\App\Http\Controllers\frontend\TravelinkPackageController::class, 'index']);
Route::post('/packages/{id}/like', [InteractionController::class, 'like'])->name('packages.like');
Route::post('/packages/{id}/comment', [InteractionController::class, 'comment'])->name('packages.comment');
Route::get('/travelinkclub/benefits', [\App\Http\Controllers\Frontend\TravelinkPackageController::class, 'club'])->name('travelinkclub.benefits');
Route::get('/benefits', function () {
    return view('frontend.club'); // Sesuaikan view jika diperlukan
})->name('benefits');
Route::get('/top-destinations', function () {
    $travelinkPackages = \App\Models\TravelinkPackage::all();
    return view('frontend.top_destinations', compact('travelinkPackages'));
})->name('top-destinations');

Route::get('/top-deals', function () {
    $travelinkPackages = \App\Models\TravelinkPackage::all();
    return view('frontend.top_deals', compact('travelinkPackages'));
})->name('top-deals');

Route::get('/lifestyle', function () {
    return view('frontend.lifestyle');
})->name('lifestyle');
