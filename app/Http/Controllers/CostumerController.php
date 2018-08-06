<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use File;
use DB;
class CostumerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:costumer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profil = App\Costumer::find(Auth::user()->id);
        return view('profil-cust')->with('profil',$profil);
    }
    public function suntingProfilForm(){
        $profil = App\Costumer::find(Auth::user()->id);
        return view('edite-akun-cust')->with('profil',$profil);
    }
    public function suntingprofil(Request $request){
        $this->validate($request,[
            'username' => 'required|max:12',
            'password' => 'confirmed',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:10|max:14',
            'nama' => 'required|max:40|string',
            'kelamin' =>'required|max:2|string',
            'alamat' => 'required|max:100',
            'foto' => 'image'
        ]);
        $update = App\Costumer::find(Auth::user()->id);
        $update['username']=$request['username'];
        if($request['password']!==null){
            $update['password']=bcrypt($request['password']);
        }
        $update['email']=$request['email'];
        $update['no hp']=$request['phone'];
        $update['nama lengkap']=$request['nama'];
        $update['jenis kelamin']=$request['kelamin'];
        $update['alamat']=$request['alamat'];
        $update['status']='aktif';
        if($request->hasFile('foto')){
        $getimageName = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move('photo', $getimageName);
        $file='photo/'.App\Costumer::find(Auth::user()->id)->{'foto profil'};
        File::delete($file);
        $update['foto profil'] = $getimageName;
        }
        $update->save();
        return redirect()->route('costumer.dashboard');
    }
    public function pemesanan(){
        $pemesanan = DB::table('requests')->where('id_costumer',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('pemesanan-cust')->with('pemesanan',$pemesanan);
    }
    public function pesan(Request $request){
        $service = App\Service::find($request['id_service']);
        return view('form-pemesanan')->with('service',$service);
    }
    public function pesen(Request $request){
        $add= new App\Request;
        $add->id_costumer=$request['id_costumer'];
        $add->id_service=$request['id_service'];
        $add['tanggal request']=$request['tanggalrequest'];
        $add['status request']=$request['statusrequest'];
        $add['tempat foto']=$request['tempatfoto'];
        $add['tanggal foto']=$request['tanggalfoto'];
        $add->save();
        return redirect()->route('costumer.pemesanan');
    }
    public function statuspemesanan(){
        $pemesanan = DB::table('requests')->where('id_costumer',Auth::user()->id)->orderBy('created_at','desc')->get();
        return view('status-pemesanan-cust')->with('pemesanan',$pemesanan);
    }
    public function konfirmasipemesanan(){
        $pemesanan = DB::table('requests')->where('id_costumer',Auth::user()->id)->where('status request','diterima')->orderBy('created_at','desc')->get();
        return view('konfirmasi-pelaksanaan-cust')->with('pemesanan',$pemesanan);
    }
    public function konfirmasipemesanane(Request $request){
        $status = App\Request::find($request['id']);
        $status['status request']=$request['status'];
        $status->save();
        return redirect()->route('costumer.konfirmasipemesanan');
    }
    public function selesaipemesanan(){
        $pemesanan = DB::table('requests')->where('id_costumer',Auth::user()->id)->where('status request','selesai')->orderBy('created_at','desc')->get();
        return view('selesai-cust')->with('pemesanan',$pemesanan);
    }
}