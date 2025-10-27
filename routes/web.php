<?php

use App\Livewire\Pages\Site\HomePage;
use App\Livewire\Pages\Site\ProductDetails;
use Illuminate\Support\Facades\Route;


// Route::get('/', HomePage::class)->name('home');
Route::view('/', 'layouts.site');
Route::get('/product/details', ProductDetails::class)->name('product.details');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
