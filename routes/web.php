<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/products');

Route::resource('products', ProductController::class);

Route::get('/cart', function () {
    $cart = session()->get('cart', []);

    $totaal = collect($cart)->sum(function ($item) {
        return $item['price'] * $item['quantity'];
    });

    return view('cart.index', compact('cart', 'totaal'));
})->name('cart.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';