<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AddImageController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [StoreController::class, 'index'])->name('dashboard');
Route::get('/store/create',[StoreController::class,'create'])->name('store.create');
Route::post('/store/store',[StoreController::class, 'store'])->name('store.store');
Route::put('/store/update',[StoreController::class, 'update'])->name('store.update');
Route::delete('store/delete/{id}',[StoreController::class, 'delete']);
Route::get('/sample', [StoreController::class, 'sample']);
Route::get('/store/course/{id}',[CourseController::class ,'index']);
Route::get('/image/index', [AddImageController::class, 'index']);
Route::post('add_image', [AddImageController::class ,'addImage'])->name('add_image');
require __DIR__.'/auth.php';
