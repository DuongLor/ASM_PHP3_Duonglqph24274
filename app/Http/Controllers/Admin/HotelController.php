<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\HotelRequest;
use App\Http\Controllers\Controller;
use App\Models\HotelImages;
use Illuminate\Support\Facades\Storage;

class HotelController extends Controller
{
	//
	public function index()
	{
		$hotels = Hotel::all();
		return view('admin.hotel.index', compact('hotels'));
	}
	public function create()
	{
		return view('admin.hotel.create');
	}
	public function store(HotelRequest $request)
	{
		if ($request->isMethod('POST')) {
			$hotel = new Hotel();
			$hotel->name = $request->name;
			$hotel->address = $request->address;
			$hotel->stars = $request->stars;
			$hotel->save();
			if ($request->hasFile('image') && $request->file('image')->isValid()) {
				$hotel_image = uploadFile('hinh', $request->file('image'));
				$hotel->hotelImages()->create([
					'hotel_id' => $hotel->id,
					'image' => $hotel_image
				]);
			};
			return redirect()->route('hotel.index')->with('success', 'Thêm thành công');
		}
		return view('client.hotel.create');
	}
	public function edit($id)
	{
		$hotel = Hotel::find($id);
		return view('admin.hotel.edit', compact('hotel'));
	}
	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required',
			'address' => 'required',
		]);
		$hotel = Hotel::find($id);
		$hotel->name = $request->name;
		$hotel->address = $request->address;
		if ($request->stars == null) {
			$hotel->stars = $hotel->stars;
		} else {
			$hotel->stars = $request->stars;
		}
		$hotel->save();
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			$hotel_image = uploadFile('hinh', $request->file('image'));
			$hotel->hotelImages()->create([
				'hotel_id' => $hotel->id,
				'image' => $hotel_image
			]);
		}
		return redirect()->route('hotel.index')->with('success', 'Cập nhật thành công');
	}
	public function destroy($id)
	{
		$hotel = Hotel::find($id);
		$hotel_image = HotelImages::where('hotel_id', $id)->get();
		foreach ($hotel_image as $key => $value) {
			$value->delete();
		}
		$hotel->delete();
		return redirect()->route('hotel.index')->with('success', 'Xóa thành công');
	}
}
