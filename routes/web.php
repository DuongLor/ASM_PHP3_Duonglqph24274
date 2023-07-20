<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\TypeRoomController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

//Admin hotel
Route::get('Hotel', [HotelController::class, 'index'])->name('hotel.index');
Route::get('Hotel/create', [HotelController::class, 'create'])->name('hotel.create');
Route::post('hotel', [HotelController::class, 'store'])->name('hotel.store');
Route::get('Hotel/edit/{id}', [HotelController::class, 'edit'])->name('hotel.edit');
Route::put('Hotel/update/{id}', [HotelController::class, 'update'])->name('hotel.update');
Route::get('Hotel/delete/{id}', [HotelController::class, 'destroy'])->name('hotel.delete');

//Admin Type Room
Route::get('TypeRoom', [TypeRoomController::class, 'index'])->name('type.index');
Route::get('TypeRoom/create', [TypeRoomController::class, 'create'])->name('type.create');
Route::post('TypeRoom', [TypeRoomController::class, 'store'])->name('type.store');
Route::get('TypeRoom/edit/{id}', [TypeRoomController::class, 'edit'])->name('type.edit');
Route::put('TypeRoom/update/{id}', [TypeRoomController::class, 'update'])->name('type.update');
Route::get('TypeRoom/delete/{id}', [TypeRoomController::class, 'destroy'])->name('type.delete');

