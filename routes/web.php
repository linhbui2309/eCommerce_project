<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
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

//profile

Route::get('profile',[App\Http\Controllers\ProfileController::class,'index']);
Route::get('profile/{id}/edit',[App\Http\Controllers\ProfileController::class,'edit']);
Route::post('profile/create',[App\Http\Controllers\ProfileController::class,'store']);

Route::put('profile/{id}/edit',[App\Http\Controllers\ProfileController::class,'update']);
Route::get('profile/{id}/delete',[App\Http\Controllers\ProfileController::class,'destroy']);
Route::resource('profile', \App\Http\Controllers\ProfileController::class); 

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
//     Route::post('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('user.destroy');
// });





Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
    Route::patch('/user', [UserController::class, 'update'])->name('user.update');
    Route::delete('/user', [UserController::class, 'destroy'])->name('user.destroy');
    

});



require __DIR__.'/auth.php';
