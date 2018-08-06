<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Costumer;
use Auth;

class CostumerRegisterController extends Controller
{

    protected $redirectPath = 'costumer';

    //shows registration form to costumer
    public function showRegisterForm(){
    	return view('auth.costumer-register');
    }

  //Handles registration request for costumer
    public function register(Request $request)
    {

       //Validates data
        $this->validate($request,[
            'username' => 'required|max:12|unique:costumers',
            'password' => 'required|min:6|confirmed',
            'email' => 'required|email|max:255|unique:costumers',
            'phone' => 'required|min:10|max:12',
        ]);
       //Create costumer
        $costumer = $this->create($request->all());

        //Authenticates costumer
        $this->guard()->login($costumer);

       //Redirects costumers
        return redirect($this->redirectPath);
    }

    //Create a new costumer instance after a validation.
    protected function create(array $data)
    {
        return Costumer::create([
            'username' => $data['username'],
            'password' => bcrypt($data['password']),
            'email' => $data['email'],
            'no hp' => $data['phone'],
        ]);
    }

    //Get the guard to authenticate costumer
   protected function guard()
   {
       return Auth::guard('costumer');
   }

}