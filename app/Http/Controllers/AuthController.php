<?php

namespace App\Http\Controllers;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;
use Auth;
class AuthController extends Controller
{
	public function showLoginForm()
	{
		return view('auth.login');
	}
	public function login(LoginRequest $request){
    	//Xác thực ng dùng. Tìm email, password trong database
		$result=Auth::attempt([
			'email' =>request()->get('email'),
			'password' =>request()->get('password'),

		],request()->get('remember'));

		if ($result===true) {
			return redirect()->route('users.index');
		}
		//flash email vào trong session
		request()->flashOnly(['email']);
		return view('auth.login',[
			'message' =>__('auth.failed'),
		]);
		
	}
	public function logout()
	{
		Auth::logout();
		return redirect()->route('layout-users.users.index');
	}

	
}
