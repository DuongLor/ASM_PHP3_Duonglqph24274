<?php

use App\Http\Controllers\Admin\BannerController;
use App\Models\Room;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoomController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\HotelController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\PaymentController;
use App\Http\Controllers\Admin\TypeRoomController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ImageRoomController;
use App\Http\Controllers\Admin\PromotionController;
use App\Http\Controllers\Admin\ImageHotelController;
use App\Http\Controllers\Client\BookingController as ClientBookingController;
use App\Http\Controllers\Client\PDFController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

//Route list Room with Hotel_id
Route::get('/list/room_where/hotel_id/{id}', [HomeController::class, 'listRoomWhereHotelId'])->name('listRoomWhereHotelId');

//Route list Hotel
Route::get('/list/hotel', [HomeController::class, 'listHotel'])->name('listHotel');

//Route list Room
Route::get('/list/room', [HomeController::class, 'listRoom'])->name('listRoom');

//Route list TypeRoom
Route::get('/list_room_by_type/{id}', [HomeController::class, 'listTypeRoom'])->name('listRoom_by_type');

//Route login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

//Route register
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register', [LoginController::class, 'registerstore'])->name('register.store');

Route::group(['middleware' => 'auth'], function () {
	//Client booking
	Route::get('/booking/{id}', [ClientBookingController::class, 'index'])->name('booking.client.index');
	Route::post('/booking', [ClientBookingController::class, 'store'])->name('booking.client.store');
	Route::get('/booking/delete/{id}', [ClientBookingController::class, 'delete'])->name('booking.client.delete');

	//Client bill
	Route::get('/bill', [ClientBookingController::class, 'bill'])->name('bill.client.index');
	
	//Client invoices
	Route::get('generate-pdf/{id}', [PDFController::class, 'generatePDF'])->name('invoices.client.index');
});

Route::group(['prefix' => 'admin', 'middleware' => 'authAdmin'], function () {
	//Admin dasboard
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
	Route::get('Room/promotion/{id}', [RoomController::class, 'promotion'])->name('room.promotion.create');


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

	//Admin khuyến mại
	Route::get('Promotion', [PromotionController::class, 'index'])->name('promotion.index');
	Route::get('Promotion/create', [PromotionController::class, 'create'])->name('promotion.create');
	Route::post('Promotion', [PromotionController::class, 'store'])->name('promotion.store');
	Route::get('Promotion/edit/{id}', [PromotionController::class, 'edit'])->name('promotion.edit');
	Route::put('Promotion/update/{id}', [PromotionController::class, 'update'])->name('promotion.update');
	Route::get('Promotion/delete/{id}', [PromotionController::class, 'destroy'])->name('promotion.delete');

	//Admin banner
	Route::get('Banner', [BannerController::class, 'index'])->name('banner.index');
	Route::get('Banner/create', [BannerController::class, 'create'])->name('banner.create');
	Route::post('Banner', [BannerController::class, 'store'])->name('banner.store');
	Route::get('Banner/delete/{id}', [BannerController::class, 'destroy'])->name('banner.delete');
});
