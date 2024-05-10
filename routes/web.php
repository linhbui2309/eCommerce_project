<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/',[App\Http\Controllers\CategoryController::class,'show']);
Route::get('categories',[App\Http\Controllers\CategoryController::class,'index']);
Route::get('categories/create',[App\Http\Controllers\CategoryController::class,'create']);
Route::post('categories/create',[App\Http\Controllers\CategoryController::class,'store']);
Route::get('categories/{id}/edit',[App\Http\Controllers\CategoryController::class,'edit']);
Route::put('categories/{id}/edit',[App\Http\Controllers\CategoryController::class,'update']);
Route::get('categories/{id}/delete',[App\Http\Controllers\CategoryController::class,'destroy']);
Route::resource('categories', \App\Http\Controllers\CategoryController::class); 



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
