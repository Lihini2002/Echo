<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/', function () {
    return view('home');
})->name('home');


Route::get('/explore', function () {
    return view('explore');
})->name('explore');


//Think if you need a controller here and if you do , you can pass one
Route::get('/brands', function () {
    return view('brands');
})->name('brands');

Route::get('/certifications', function () {
    return view('certifications');
})->name('certifications');


Route::get('/counter', Counter::class)->name('counter');
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/cart', function () {
        return view('order.cart');
    })->name('cart');

    Route::get('/explore/{product}', [ProductController::class, 'show'])->name('products.show');
    Route::get('/brands/{brand}', [BrandController::class, 'show'])->name('brands.show');

    Route::resource(
        'user', 
        \App\Http\Controllers\UserController::class
    );
    

    
    //Do we need a controller really?
    // Route::get('/brands/{brand}', BrandProfile::class)->name('brand.profile');

    // Route::resource(
    //     'product', 
    //     \App\Http\Controllers\ProductController::class
    // );

    
});

