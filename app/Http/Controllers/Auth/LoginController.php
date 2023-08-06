<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
	//
	public function index()
	{
		return view('client.auth.login');
	}

	public function store(Request $request)
	{
		if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
			return redirect()->route('home');
		} else {
			session()->flash('error', 'Email hoặc mật khẩu không đúng');
			return redirect()->back();
		}
	}

	public function logout()
	{
		Auth::logout();
		return redirect()->route('login');
	}

	public function register()
	{
		return view('client.auth.register');
	}

	public function registerstore(Request $request)
	{
		$this->validate($request, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
		if ($request->password == $request->password_confirmation) {
			$user = User::create([
				'name' => $request->name,
				'email' => $request->email,
				'password' => bcrypt($request->password),
			]);
			Auth::login($user);

			return redirect()->route('login')->with('success', 'Đăng ký thành công');
		} else {
			return redirect()->back()->with('error', 'Mật khẩu không trùng khớp');
		}
	}
}
