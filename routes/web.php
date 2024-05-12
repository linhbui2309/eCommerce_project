<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
Route::get('/',[App\Http\Controllers\BlogController::class,'show']);
Route::get('blogs',[App\Http\Controllers\BlogController::class,'index']);
Route::get('blogs/create',[App\Http\Controllers\BlogController::class,'create']);
Route::post('blogs/create',[App\Http\Controllers\BlogController::class,'store']);
Route::get('blogs/{id}/edit',[App\Http\Controllers\BlogController::class,'edit']);
Route::put('blogs/{id}/edit',[App\Http\Controllers\BlogController::class,'update']);
Route::get('blogs/{id}/delete',[App\Http\Controllers\BlogController::class,'destroy']);
Route::resource('blogs', \App\Http\Controllers\BlogController::class); 
Route::get('blogs-details', function () {
    return view('frontend.blog.blog-details');
});




Route::get('/dashboard', function () {
    return view('frontend.pages.admin-page.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
