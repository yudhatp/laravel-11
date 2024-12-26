<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Products;
use App\Livewire\CreateProduct;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/products/create', CreateProduct::class)->name('products.create');
    Route::get('/products', Products::class)->name('products.index');
});
