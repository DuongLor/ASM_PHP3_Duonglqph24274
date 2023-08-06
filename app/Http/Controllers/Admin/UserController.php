<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
	//
	public function index()
	{
		$customers = User::all();
		return view('admin.custom.index', compact('customers'));
	}
	public function destroy($id)
	{
		$customer = User::find($id);
		$customer->delete();
		return redirect()->back()->with('success', 'Xóa thành công');
	}
}
