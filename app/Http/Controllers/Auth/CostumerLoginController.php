<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class CostumerLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:costumer');
	}

    public function showLoginForm(){
    	return view('auth.costumer-login');
    }

    public function login(Request $request){
		$this->validate($request,[
			'email' => 'required|email',
			'password' => 'required|min:6'
		]);    

		if(Auth::guard('costumer')->attempt(['email'=>$request->email,'password'=>$request->password],$request->remember)){
			return redirect()->intended(route('costumer.dashboard'));
		}	

		return redirect()->back()->withInput($request->only('email','remember'));
    }
}
