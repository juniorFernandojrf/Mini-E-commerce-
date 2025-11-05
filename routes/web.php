<?php

use App\Livewire\Pages\Admin\AdminDashboard;
use App\Livewire\Pages\Admin\Content;
use App\Livewire\Pages\Admin\Header;
use App\Livewire\Pages\Site\HomePage;
use App\Livewire\Pages\Site\ProductDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    Auth::loginUsingId(1);
    return to_route('dashboard');
});

// Route::get('/', HomePage::class)->name('home');
Route::view('/', 'layouts.site');
Route::get('/product/details', ProductDetails::class)->name('product.details');

// Route::get('/', HomePage::class)->name('home');
Route::view('/', 'layouts.site')->name('home');
Route::get('/product/details', ProductDetails::class)->name('product.details');

Route::get('/admin/dashboard', AdminDashboard::class)
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
