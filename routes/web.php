<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/products');

Route::resource('products', ProductController::class);

Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');

    Route::post('/cart/add/{product}', [CartController::class, 'add'])
        ->name('cart.add');

    Route::delete('/cart/remove/{product}', [CartController::class, 'remove'])
        ->name('cart.remove');
});

require __DIR__.'/auth.php';