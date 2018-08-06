<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Costumer;
use Auth;
use App;
class StudioRegisterController extends Controller
{

    protected $redirectPath = 'studio';

    //shows registration form to costumer
    public function showRegisterForm(){
    	return view('auth.studio-register');
    }

  //Handles registration request for costumer
    public function register(Request $request){
      $this->validate($request,[
            'username' => 'required|max:12|unique:studios',
            'password' => 'required|confirmed',
            'email' => 'required|email|max:255|unique:studios',
            'phone' => 'required|string|min:10|max:14',
            'nama' => 'required|max:40|string',
            'namapemilik' => 'required|max:40|string',
        ]);
        $update = new App\Studio;
        $update['username']=$request['username'];
        $update['password']=bcrypt($request['password']);
        $update['email']=$request['email'];
        $update['no telp']=$request['phone'];
        $update['nama studio']=$request['nama'];
        $update['nama pemilik']=$request['namapemilik'];
        $update['status']='aktivasi';
        $update['rating']=0;
        $update->save();
        return view('setelah-regis-studio');
    }

}