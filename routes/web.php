<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// menghubungkan route dengan controller

use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'home'])->name('home'); //homepage website // terdapat form input

Route::get('/about', [HomeController::class, 'about'])->name('about'); //kehalamana about

Route::get('/contact', [HomeController::class, 'contact'])->name('contact'); // kehalaman contact

Route::get('/product', [HomeController::class, 'product'])->name('product'); // kehalaman tampil product

Route::get('/update/{id}', [HomeController::class, 'edit'])->name('edit'); // kehalaman form update

Route::post('/store', [HomeController::class, 'store'])->name('store'); // menginput data (tidak ada halaman)

Route::patch('/update/{id}', [HomeController::class, 'update'])->name('update'); //mengupdate data (tidak ada halaman)

Route::delete('/delete/{id}', [HomeController::class, 'delete'])->name('delete'); //mendelete data (tidak ada halaman)

Route::get('/category', [HomeController::class, 'category'])->name('category');

Route::post('/category1', [HomeController::class, 'category1'])->name('category1');

Route::get('/edit_category/{id}', [HomeController::class, 'edit_category'])->name('edit_category');

Route::patch('/fix_update_category/{id}', [HomeController::class, 'fix_update_category'])->name('fix_update_category');

Route::delete('/delete_category/{id}', [HomeController::class, 'delete_category'])->name('delete_category');



