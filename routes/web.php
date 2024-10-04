<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

Route::get('', [LandingController::class, 'index']);
Route::get('ttg', [LandingController::class, 'ttg'])->name('ttg');
Route::get('profil', [LandingController::class, 'profil'])->name('profil');
Route::get('kontak', [LandingController::class, 'kontak'])->name('kontak');
Route::get('galeri', [LandingController::class, 'galeri'])->name('galeri');
Route::get('blog', [LandingController::class, 'blog'])->name('blog');
