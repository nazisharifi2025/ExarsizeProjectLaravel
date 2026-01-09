<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Middleware\teacheerMiddleware;
use Illuminate\Support\Facades\Route;

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
Route::prefix('teacher')->controller(TeacherController::class)->middleware(teacheerMiddleware::class)->group(function(){
    Route::get('insert' , 'User');
    Route::post('Insert' ,'Insert');
    Route::get('shoing/{id}' , "shoing");
    Route::get('shoing2/{id}' , "shoingData");
    Route::get('shoing3' , "shoingFilter");
});
Route::get('shoing/{id}' , [StudentController::class , 'shoing']);
require __DIR__.'/auth.php';
