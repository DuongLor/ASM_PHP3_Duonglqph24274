<?php

namespace App\Http\Controllers\Admin;

use App\Models\Promotion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
	//
	public function index()
	{
		$promotions = Promotion::all();
		return view('admin.promotion.index', compact('promotions'));
	}
	public function create()
	{
		return view('admin.promotion.create');
	}
	public function store(Request $request)
	{
		if ($request->isMethod('POST')) {
			$request->validate([
				'name' => 'required',
				'description' => 'required',
				'price' => 'required',
			]);
			$promotion = new Promotion();
			$promotion->name = $request->name;
			$promotion->description = $request->description;
			$promotion->price = $request->price;
			$promotion->save();
			return redirect()->route('promotion.index')->with('success', 'Thêm thành công');
		}
		
		return view('client.promotion.create');
	}
	public function edit($id)
	{
		$promotion = Promotion::find($id);
		return view('admin.promotion.edit', compact('promotion'));
	}
	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required',
			'description' => 'required',
			'price' => 'required',
		]);
		$promotion = Promotion::find($id);
		$promotion->name = $request->name;
		$promotion->description = $request->description;
		$promotion->price = $request->price;
		$promotion->save();
		return redirect()->route('promotion.index')->with('success', 'Cập nhật thành công');
	}
	public function destroy($id)
	{
		$promotion = Promotion::find($id);
		$promotion->delete();
		return redirect()->route('promotion.index')->with('success', 'Xóa thành công');
	}
}
