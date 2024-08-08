<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TinController;
use App\Http\Controllers\AuthenController;
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
// Route::get('/', [AdminController::class, 'admin'])->name('admin');


// admin
Route::get('admin/master', [AdminController::class, 'admin'])->name('admin');
// Route::get('admin/home/logout', [AdminController::class, 'logout'])->name('logout');
// Route::get('admin/home/admin', [AdminController::class, 'trangchu'])->name('trangchu');
Route::get('admin/master/tableloaitin', [AdminController::class, 'tableloaitin'])->name('tableloaitin');
Route::get('admin/master/tabletin', [AdminController::class, 'tabletin'])->name('tabletin');

//loaitin
Route::get('admin/master/addloaitin', [AdminController::class, 'addloaitin'])->name('addloaitin');
Route::post('admin/master/addloaitin', [AdminController::class, 'addLoaiTinPost'])->name('addloaitinpost');

Route::get('admin/master/editloaitin/{id}', [AdminController::class, 'editloaitin'])->name('editloaitin');
Route::put('admin/master/editloaitinpost/{id}', [AdminController::class, 'editloaitinpost'])->name('editloaitinpost');

//tin
Route::get('admin/master/addtin', [AdminController::class, 'addtin'])->name('addtin');
Route::post('admin/master/addtin', [AdminController::class, 'addTinPost'])->name('addtinpost');

Route::get('admin/master/edittin/{id}', [AdminController::class, 'edittin'])->name('edittin');
Route::put('admin/master/edittinpost/{id}', [AdminController::class, 'edittinpost'])->name('edittinpost');

//delete
Route::delete('admin/master/deleteloaitin/{id}', [AdminController::class, 'deleteloaitin'])->name('deleteloaitin');
Route::delete('admin/master/deletetin/{id}', [AdminController::class, 'deletetin'])->name('deletetin');


// Route::get('admin/master/addtin', [AdminController::class, 'loaitin'])->name('loaitin');




// Client
Route::get('/tintrongloai/{id}', [TinController::class, 'tintrongloai'])->name('tintrongloai');
Route::get('/chitiet/{id}', [TinController::class, 'chitiet'])->name('chitiet');

Route::match(['get', 'post'], '/timkiem', [TinController::class, 'timkiem'])->name('timkiem');

// Route::get('/dangnhap', [TinController::class, 'dangnhap'])->name('dangnhap');
// Route::get('/dangki', [TinController::class, 'dangki'])->name('dangki');
// Route::get('/quenmatkhau', [TinController::class, 'quenmatkhau'])->name('quenmatkhau');





// auth
Route::get('login', [AuthenController::class, 'showLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handLogin']);


Route::get('logup', [AuthenController::class, 'showLogup'])->name('logup');
Route::post('logup', [AuthenController::class, 'handLogup']);

Route::get('forgot', [AuthenController::class, 'showForgot'])->name('forgot');
Route::post('forgot', [AuthenController::class, 'handForgot']);


Route::post('logout', [AuthenController::class, 'logout'])->name('logout');


Route::get('member', [TinController::class, 'index'])
    ->name('index')
    ->middleware(['auth']);
Route::get('admin', [AdminController::class, 'index_ad'])
    ->name('index_ad')
    ->middleware(['auth']);
