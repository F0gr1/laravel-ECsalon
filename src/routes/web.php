<?php

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


Route::get('/', [StoreController::class, 'index']);
Route::get('/sample', [StoreController::class, 'sample']);
Route::get('/{id}',[CourseController::class ,'index']);
Route::get('/image/index', [AddImageController::class, 'index']);
Route::post('add_image', [AddImageController::class ,'addImage'])->name('add_image');