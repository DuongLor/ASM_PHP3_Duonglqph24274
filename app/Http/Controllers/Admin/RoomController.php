<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\Type;
use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RoomController extends Controller
{
	//
	public function index()
	{
		$rooms = Room::all();
		return view('admin.Room.index', compact('rooms'));
	}
	public function create()
	{
		$hotels = Hotel::all();
		$types = Type::all();
		return view('admin.Room.create', compact('hotels', 'types'));
	}
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required',
			'hotel_id' => 'required',
			'type_id' => 'required',
			'price' => 'required',
		]);
		$Room = new Room();
		$Room->hotel_id = $request->hotel_id;
		$Room->type_id = $request->type_id;
		$Room->name = $request->name;
		$Room->price = $request->price;
		$Room->save();
		return redirect()->route('room.index')->with('success', 'Thêm mới thành công');
	}
	public function edit($id)
	{
		$room = Room::find($id);
		$hotels = Hotel::all();
		$types = Type::all();
		return view('admin.room.edit', compact('room', 'hotels', 'types'));
	}
	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required',
			'hotel_id' => 'required',
			'type_id' => 'required',
			'price' => 'required',
		]);
		$Room = Room::find($id);
		$Room->hotel_id = $request->hotel_id;
		$Room->type_id = $request->type_id;
		$Room->name = $request->name;
		$Room->price = $request->price;
		$Room->save();
		return redirect()->route('room.index')->with('success', 'Cập nhật thành công');
	}
	public function destroy($id)
	{
		$Room = Room::find($id);
		$Room->delete();
		return redirect()->route('room.index')->with('success', 'Xóa thành công');
	}
}
