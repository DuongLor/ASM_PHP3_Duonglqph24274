<?php

namespace App\Http\Controllers\Client;

use App\Models\Room;
use App\Models\Booking;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Barryvdh\Snappy\Facades\SnappyPdf;

class BookingController extends Controller
{
	//
	public function index($id)
	{
		$room = Room::find($id);
		return view('client.booking.booking', compact('room'));
	}
	public function store(Request $request)
	{
		$request->validate([
			'start_date' => 'required',
			'end_date' => 'required',
		]);
		$diff = Carbon::parse($request->end_date)->diffInDays(Carbon::parse($request->start_date));
		if ($request->discount != null) {
			$discount = $request->discount;
		} else {
			$discount = 0;
		}
		$booking = new Booking();
		$booking->start_date = $request->start_date;
		$booking->end_date = $request->end_date;
		$booking->room_id = $request->room_id;
		$booking->user_id = auth()->user()->id;
		$booking->price = $diff *  ($request->price - $discount);
		$booking->discount = $discount;
		$room = Room::find($request->room_id);
		$data = [
			'name' => auth()->user()->name,
			'phong' => $room->name,
			'loaiphong' => $room->type->name,
			'thoigian' => $diff,
			'giaphong' => $room->price,
			'thanhtien' => $booking->price,
			'giagiamgia' => $booking->discount
		];
		Mail::send('client.emails.bill', $data, function ($message) {
			$message->to('khachhang@email.com');
			$message->subject('Hóa đơn đặt phòng');
		});
		$booking->save();

		return redirect()->route('home')->with('success', 'Thêm thành công');
	}

	public function bill()
	{
		$bookings = Booking::where('user_id', auth()->user()->id)->get();
		return view('client.booking.bill', compact('bookings'));
	}

	public function delete($id)
	{
		$booking = Booking::find($id);
		$booking->delete();
		return redirect()->back()->with('success', 'Xóa thành công');
	}


}
