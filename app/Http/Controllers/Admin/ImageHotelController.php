<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use App\Models\HotelImages;
use Illuminate\Http\Request;

class ImageHotelController extends Controller
{
	//
	public function index()
	{
		$imageHotels = HotelImages::all();
		return view('admin.imageHotel.index', compact('imageHotels'));
	}
	public function create()
	{
		$hotels = Hotel::all();
		return view('admin.imageHotel.create', compact('hotels'));
	}
	public function store(Request $request)
	{
		if ($request->isMethod('POST')) {
			$imageHotel = new HotelImages();
			$imageHotel->hotel_id = $request->hotel_id;
			if ($request->hasFile('image') && $request->file('image')->isValid()) {
				$request->validate([
					'image' => 'required|image',
				]);
				$hotel_image = uploadFile('hinh', $request->file('image'));
				$imageHotel->image = $hotel_image;
			};
			$imageHotel->save();
			return redirect()->route('imageHotel.index')->with('success', 'Thêm thành công');
		}
		return view('client.imageHotel.create');
	}

	public function destroy($id)
	{
		$imageHotel = HotelImages::find($id);
		$imageHotel->delete();
		return redirect()->route('imageHotel.index')->with('success', 'Xóa thành công');
	}
}
