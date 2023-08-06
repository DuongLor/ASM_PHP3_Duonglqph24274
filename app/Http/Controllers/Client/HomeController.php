<?php

namespace App\Http\Controllers\Client;

use App\Models\Hotel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Room;

class HomeController extends Controller
{
	//
	public function index()
	{
		$rooms = Room::all()->take(6);
		return view('client.home', compact('rooms'));
	}
	public function listRoomWhereHotelId($id)
	{
		$rooms = Room::where('hotel_id', $id)->get();
		return view('client.list_room_where_hotel_id', compact('rooms'));
	}
	public function listHotel()
	{
		$Hotels = Hotel::all();
		return view('client.list_hotel', compact('Hotels'));
	}

	public function listRoom()
	{
		$rooms = Room::all();
		return view('client.list_room', compact('rooms'));
	}
	public function listTypeRoom($id)
	{
		$rooms = Room::where('type_id', $id)->get();
		return view('client.list_type_room', compact('rooms'));
	}
}
