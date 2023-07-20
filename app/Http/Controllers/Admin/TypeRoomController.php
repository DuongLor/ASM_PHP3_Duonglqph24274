<?php

namespace App\Http\Controllers\Admin;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests\TypeRequest;
use App\Http\Controllers\Controller;

class TypeRoomController extends Controller
{
	//
	public function index()
	{
		$types = Type::all();
		return view('admin.type.index', compact('types'));
	}
	public function create()
	{
		return view('admin.type.create');
	}
	public function store(TypeRequest $request)
	{
		if ($request->isMethod('POST')) {
			$type = new Type();
			$type->name = $request->name;
			$type->save();
			return redirect()->route('type.index')->with('success', 'Thêm thành công');
		}
		return view('client.type.create');
	}
	public function edit($id)
	{
		$type = Type::find($id);
		return view('admin.type.edit', compact('type'));
	}
	public function update(TypeRequest $request, $id)
	{
		$request->validate([
			'name' => 'required',
		]);
		$type = type::find($id);
		$type->name = $request->name;
		$type->save();
		return redirect()->route('type.index')->with('success', 'Cập nhật thành công');
	}
	public function destroy($id)
	{
		$type = Type::find($id);
		$type->delete();
		return redirect()->route('type.index')->with('success', 'Xóa thành công');
	}
}
