<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::resource('products', ProductController::class);

Route::redirect('/', '/products');// <--- voor automatisch brengen naar ...(home)pagina

// Route::get('/', function () {
//     return view('welcome');
// });
