<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ModuleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->middleware(['auth']);
Route::get('/modules/{id}', [HomeController::class, 'show'])->middleware(['auth']);
Route::post('/cart/', [HomeController::class, 'cart'])->middleware(['auth'])->name('cart');


Route::name("admin.")->prefix('admin')->group(function () {
    Route::resource('products', ProductController::class);
    Route::resource('modules', ModuleController::class);
});//->middleware(['admin']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';