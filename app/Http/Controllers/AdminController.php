<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $akun = DB::table('studios')->where('status','aktivasi')->get();
        return view('permintaan-admin')->with('akun',$akun);
    }
    public function status1(Request $request){
        $update=App\Studio::find($request['id']);
        $update->status = 'aktif';
        $update->save();
        return redirect()->route('admin.dashboard');

    }
    public function status2(Request $request){
        App\Studio::find($request['id'])->delete();
        return redirect()->route('admin.dashboard');
    }
}