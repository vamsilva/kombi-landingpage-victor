<?php

use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::post('/contact', [ContatoController::class, 'store'])->name('contato.store');

//Login Admin
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login']);
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


// Área restrita
Route::middleware('auth:admin')->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('banners', BannerController::class);
    Route::resource('faqs', FaqController::class);
});


