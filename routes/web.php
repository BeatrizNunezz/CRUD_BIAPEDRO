<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {

    Route::get('admin/dashboard', [HomeController::class, 'index']);
    
    Route::get('/admin/products', [ProductController::class, 'index'])->name('admin/products');
    Route::get('/admin/products/creat', [ProductController::class, 'create'])->name('admin/products/create');
});


require __DIR__.'/auth.php';

//Route::get('admin/dashboard', [HomeController::class,'index']);
//Route::get('admin/dashboard', [HomeController::class,'index'])->middleware(['auth', 'admin']);

