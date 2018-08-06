<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use DB;
class BerandaController extends Controller
{
    public function index(){
    	return view('index');
    }
    public function contact(){
    	return view('kontak');
    }
    public function about(){
    	return view('about');
    }
    public function layananpemesanan(Request $request){
        if ($request->has('kategori') && !$request->has('kota')) {
            if ($request['kategori']!==null){
                $produk = DB::table('services')->where('id_category',$request['kategori'])->get();
            }else{
                $produk = App\Service::all();
            }
        }else{
            $produk = App\Service::all();
        }
    	return view('layanan-pemesanan')->with('produk',$produk)->with('val',$request['kategori']);
    }
    public function signup(){
    	return view('sebelum-regis');
    }
    public function signin(){
    	return view('sebelum-login');
    }
    public function profilcost($id){
        $profil = App\Costumer::find($id);
        return view('profil-cus')->with('profil',$profil);
    }
    public function profilstud($id){
        $profil = App\Studio::find($id);
        return view('profil-stu')->with('profil',$profil);
    }
}
