<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\HomeController;

Route::get('/',[App\Http\Controllers\HomeController::class,'index']);

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

//USER
Route::middleware(['auth','userMiddleware'])->group(function () {
    Route::get('store/{id}/register',[App\Http\Controllers\HomeController::class,'storeRegister']);
    //dashboard
    Route::get('dashboard',[UserController::class,'show'])->name('dashboard');
    //registartion
    Route::post('/store/{store_id}/register',[HomeController::class,'processRegistration'])->name('registration.store');
});








//ADMIN
Route::middleware(['auth','adminMiddleware'])->group(function () {

    //dashboard
    Route::get('/admin/dashboard',[AdminController::class,'show'])->name('admin.dashboard');

    //profile
    Route::get('/profile', [AdminController::class, 'index'])->name('profile.index');
    Route::post('/profile/create',[AdminController::class,'store'])->name('profile.create');
    Route::get('/profile/{id}/edit', [AdminController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/{id}/edit',[AdminController::class,'update'])->name('profile.update');
    Route::delete('/profile', [AdminController::class, 'destroy'])->name('profile.destroy');

    //registration
    Route::get('/registration', [RegistrationController::class, 'index'])->name('registration.index');
   
    Route::get('/admin/approve/{userId}', [AdminController::class, 'approveRegistration'])->name('admin.approve');
    Route::get('/admin/reject/{userId}', [AdminController::class, 'rejectRegistration'])->name('admin.reject');
    

    //permissions
    Route::resource('permissions', \App\Http\Controllers\PermissionController::class);
    Route::get('permissions/{permissionId}/delete', [App\Http\Controllers\PermissionController::class,'destroy']);

    //roles
    Route::resource('roles', \App\Http\Controllers\RoleController::class);
    Route::get('roles/{roleId}/delete', [App\Http\Controllers\RoleController::class,'destroy']);
    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class,'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class,'givePermissionToRole']);

    //callender
    
    //fullcalender
Route::get('fullcalendar',[FullCalendarController::class,'index'])->name('fullcalendar.index');
Route::post('fullcalendar/create',[FullCalendarController::class],'store');
Route::post('fullcalendar/update',[FullCalendarController::class],'update');
Route::post('fullcalendar/delete',[FullCalendarController::class],'destroy');


});





// Route::middleware('auth')->group(function () {
//     Route::get('/user', [UserController::class, 'edit'])->name('user.edit');
//     Route::patch('/user', [UserController::class, 'update'])->name('user.update');
//     Route::delete('/user', [UserController::class, 'destroy'])->name('user.destroy');
    

// });



require __DIR__.'/auth.php';
