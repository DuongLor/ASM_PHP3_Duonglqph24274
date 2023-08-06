<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BannerMaketing;
use Illuminate\Http\Request;

class BannerController extends Controller
{
	//
	public function index()
	{
		$banners = BannerMaketing::all();
		return view('admin.banner.index', compact('banners'));
	}
	public function create()
	{
		return view('admin.banner.create');
	}
	public function store(Request $request)
	{
		if ($request->isMethod('POST')) {
			$request->validate([
				'name' => 'required|max:255',
			]);
			$banner = new BannerMaketing();
			$banner->name = $request->name;
			if ($request->hasFile('image') && $request->file('image')->isValid()) {
				$request->validate([
					'image' => 'required|image',
				]);
				$image = uploadFile('hinh', $request->file('image'));
				$banner->image = $image;
			};
			$banner->save();
			return redirect()->route('banner.index')->with('success', 'Thêm thành công');
		}
		return view('client.banner.create');
	}

	public function destroy($id)
	{
		$banner = BannerMaketing::find($id);
		$banner->delete();
		return redirect()->route('banner.index')->with('success', 'Xóa thành công');
	}
}
