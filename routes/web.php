<?php

use App\Livewire\Pages\Admin\Content;
use App\Livewire\Pages\Admin\Header;
use App\Livewire\Pages\Site\HomePage;
use App\Livewire\Pages\Site\ProductDetails;
use Illuminate\Support\Facades\Route;


// Route::get('/', HomePage::class)->name('home');
Route::view('/', 'layouts.site');
Route::get('/product/details', ProductDetails::class)->name('product.details');

Route::get('dashboard', Content::class)
    // ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
