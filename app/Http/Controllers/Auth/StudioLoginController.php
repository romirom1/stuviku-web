<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class StudioLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:studio');
	}

    public function showLoginForm(){
    	return view('auth.studio-login');
    }

    public function login(Request $request){
		$this->validate($request,[
			'email' => 'required|email',
			'password' => 'required|min:6'
		]);    

		if(Auth::guard('studio')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
			return redirect()->intended(route('studio.dashboard'));
		}	

		return redirect()->back()->withInput($request->only('email','remember'));
    }
}
