<?php

use App\Http\Controllers\AttributeController;
use App\Http\Controllers\AttributeOptionController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function () {
    // Attributes
    Route::get('/attributes', [AttributeController::class, 'index'])->name('attributes.index');
    Route::get('/attributes/create', [AttributeController::class, 'create'])->name('attributes.create');
    Route::post('/attributes/create', [AttributeController::class, 'store'])->name('attributes.store');
    Route::get('/attributes/delete/{attribute}', [AttributeController::class, 'destroy'])->name('attributes.destroy');

    // Attributes Options
    Route::get('/attributes-options', [AttributeOptionController::class, 'index'])->name('attributes-options.index');
    Route::get('/attributes-options/create', [AttributeOptionController::class, 'create'])->name('attributes-options.create');
    Route::post('/attributes-options/create', [AttributeOptionController::class, 'store'])->name('attributes-options.store');
    Route::get('/attributes-options/delete/{attributeOption}', [AttributeOptionController::class, 'destroy'])->name('attributes-options.destroy');

    // Products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products/create', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/delete/{product}', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/viewJson/{product}', [ProductController::class, 'viewJson'])->name('products.viewJson');
});



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
