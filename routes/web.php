<?php

use App\Http\Controllers\TinController;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [TinController::class, 'index'])->name('home');

Route::get('/tintrongloai/{id}', [TinController::class, 'tintrongloai'])->name('tintrongloai');
Route::get('/chitiet/{id}', [TinController::class, 'chitiet'])->name('chitiet');
