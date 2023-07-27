<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\TypeRoomController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageRoomController;
use App\Http\Controllers\Admin\ImageHotelController;

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

//Admin Room
Route::get('Room', [RoomController::class, 'index'])->name('room.index');
Route::get('Room/create', [RoomController::class, 'create'])->name('room.create');
Route::post('Room', [RoomController::class, 'store'])->name('room.store');
Route::get('Room/edit/{id}', [RoomController::class, 'edit'])->name('room.edit');
Route::put('Room/update/{id}', [RoomController::class, 'update'])->name('room.update');
Route::get('Room/delete/{id}', [RoomController::class, 'destroy'])->name('room.delete');

//Admin Review
Route::get('Review', [ReviewController::class, 'index'])->name('review.index');
Route::get('Review/delete/{id}', [ReviewController::class, 'destroy'])->name('review.delete');

//Admin RoomImage
Route::get('ImageRoom', [ImageRoomController::class, 'index'])->name('imageRoom.index');
Route::get('ImageRoom/create', [ImageRoomController::class, 'create'])->name('imageRoom.create');
Route::post('ImageRoom', [ImageRoomController::class, 'store'])->name('imageRoom.store');
Route::get('ImageRoom/delete/{id}', [ImageRoomController::class, 'destroy'])->name('imageRoom.delete');

//Admin HotelImage
Route::get('ImageHotel', [ImageHotelController::class, 'index'])->name('imageHotel.index');
Route::get('ImageHotel/create', [ImageHotelController::class, 'create'])->name('imageHotel.create');
Route::post('ImageHotel', [ImageHotelController::class, 'store'])->name('imageHotel.store');
Route::get('ImageHotel/delete/{id}', [ImageHotelController::class, 'destroy'])->name('imageHotel.delete');

//Admin User
Route::get('User', [UserController::class, 'index'])->name('user.index');
Route::get('User/delete/{id}', [UserController::class, 'destroy'])->name('user.delete');

//Admin Booking
Route::get('Booking', [BookingController::class, 'index'])->name('booking.index');
Route::get('Booking/delete/{id}', [BookingController::class, 'destroy'])->name('booking.delete');

//Admin Payment
Route::get('Payment', [PaymentController::class, 'index'])->name('payment.index');
Route::get('Payment/create', [PaymentController::class, 'create'])->name('payment.create');
Route::post('Payment', [PaymentController::class, 'store'])->name('payment.store');
Route::get('Payment/edit/{id}', [PaymentController::class, 'edit'])->name('payment.edit');
Route::put('Payment/update/{id}', [PaymentController::class, 'update'])->name('payment.update');
Route::get('Payment/delete/{id}', [PaymentController::class, 'destroy'])->name('payment.delete');
