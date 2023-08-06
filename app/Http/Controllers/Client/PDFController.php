<?php

namespace App\Http\Controllers\Client;

use App\Models\Booking;
use PDF;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PDFController extends Controller
{
    //
		public function generatePDF($id){
			$booking = Booking::find($id);
			$data = [
				'name' => $booking->user->name,
				'hotelName' => $booking->room->hotel->name,
				'roomName' => $booking->room->name,
				'price' => $booking->price,
				'discount' => $booking->discount,
				'start_date' => $booking->start_date,
				'end_date' => $booking->end_date
			];
			$pdf = PDF::loadView('client.invoices.index', $data);
			return $pdf->download('invoice.pdf');

		}
}
