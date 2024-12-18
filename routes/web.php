<?php

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\publicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [publicController::class, 'welcomePage'])->name('welcome_page');
Route::get('/articoli', [ProductsController::class, 'productsList'])->name('products_list');
Route::get('/dettagliArticolo/{id}', [ProductsController::class, 'productDetails'])->name('product_details');