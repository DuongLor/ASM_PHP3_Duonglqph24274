<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
	//
	public function index()
	{
		$bookings = Booking::all();
		return view('admin.booking.index', compact('bookings'));
	}
}
