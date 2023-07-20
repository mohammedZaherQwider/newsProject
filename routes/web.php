<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[NewsController::class,'index'])->name('home.index');
Route::get('/allNews',[NewsController::class,'allNews'])->name('home.allNews');

Route::get('/contact',[NewsController::class,'contact'])->name('home.contact');
Route::get('/newsdetailes',[NewsController::class,'newsdetailes'])->name('home.newsdetailes');
Route::get('/create',[NewsController::class,'create'])->name('home.create');
Route::post('/create',[NewsController::class,'store'])->name('home.store');

Route::get('/show/{id}',[NewsController::class,'show'])->name('home.show');
Route::get('/destroy/{id}',[NewsController::class,'destroy'])->name('home.destroy');

Route::get('/update/{id}',[NewsController::class,'edit'])->name('home.update');
Route::post('/updatee/{id}',[NewsController::class,'update'])->name('home.updatee');

Route::post('/addComment/{id}',[NewsController::class,'comment'])->name('home.comment');


