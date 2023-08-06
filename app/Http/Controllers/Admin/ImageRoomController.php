<?php

namespace App\Http\Controllers\Admin;

use App\Models\Room;
use App\Models\RoomImages;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImageRoomController extends Controller
{
    //
		public function index()
		{
			$imageRooms = RoomImages::all();
			return view('admin.imageRoom.index', compact('imageRooms'));
		}
		public function create()
		{
			$Rooms = Room::all();
			return view('admin.imageRoom.create', compact('Rooms'));
		}
		public function store(Request $request)
		{
			if ($request->isMethod('POST')) {
				$imageRoom = new RoomImages();
				$imageRoom->room_id = $request->room_id;
				if ($request->hasFile('image') && $request->file('image')->isValid()) {
					$request->validate([
						'image' => 'required|image',
					]);
					$room_image = uploadFile('hinh', $request->file('image'));
					$imageRoom->image = $room_image;
				};
				$imageRoom->save();
				return redirect()->route('imageRoom.index')->with('success', 'Thêm thành công');
			}
			return view('client.imageRoom.create');
		}
	
		public function destroy($id)
		{
			$imageRoom = RoomImages::find($id);
			$imageRoom->delete();
			return redirect()->route('imageRoom.index')->with('success', 'Xóa thành công');
		}
}
