<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App;
use File;
use DB;
class StudioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth:studio');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guard('studio')->user()->status==='aktivasi'){
            return view('setelah-regis-studioe');
        }else{
            return view('profil-studio');
        }
    }
    public function suntingProfilForm(){
        $profil = App\Studio::find(Auth::user()->id);
        return view('edite-akun-studio')->with('profil',$profil);
    }
    public function suntingprofil(Request $request){
        $this->validate($request,[
            'username' => 'required|max:12',
            'password' => 'confirmed',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|min:10|max:14',
            'nama' => 'required|max:40|string',
            'motto' => 'required|max:40|string',
            'deskripsi' => 'required|max:255|string',
            'namapemilik' => 'required|max:40|string',
            'alamat' => 'required|max:100',
            'foto' => 'image'
        ]);
        $update = App\Studio::find(Auth::user()->id);
        $update['username']=$request['username'];
        if($request['password']!==null){
            $update['password']=bcrypt($request['password']);
        }
        $update['email']=$request['email'];
        $update['no telp']=$request['phone'];
        $update['nama studio']=$request['nama'];
        $update['motto']=$request['motto'];
        $update['deskripsi']=$request['deskripsi'];
        $update['nama pemilik']=$request['namapemilik'];
        $update['alamat studio']=$request['alamat'];
        $update['status']='aktif';
        if($request->hasFile('foto')){
        $getimageName = time().'.'.$request->foto->getClientOriginalExtension();
        $request->foto->move('photo', $getimageName);
        $file='photo/'.App\Studio::find(Auth::user()->id)->{'logo studio'};
        File::delete($file);
        $update['logo studio'] = $getimageName;
        }
        $update->save();
        return redirect()->route('studio.dashboard');
    }
    public function permintaan(){
        if(Auth::guard('studio')->user()->status==='aktivasi'){
            return view('setelah-regis-studioe');
        }else{
            $pemesanan = DB::table('requests')->join('services','services.id','=','requests.id_service')->where('id_studio',Auth::user()->id)->where('status request','belum')->orderBy('requests.created_at','desc')->select('id_costumer','id_category','nama','tempat foto','tanggal foto','requests.id')->get();
        return view('permintaan-masuk-studio')->with('pemesanan',$pemesanan);
        }
        
    }
    public function permintaane(Request $request){
        $status = App\Request::find($request['id']);
        $status['status request']=$request['status'];
        $status->save();
        return redirect()->route('studio.permintaan');
    }
    public function layanan(){
        return view('layanan-studio');
    }
    public function postlayanan(Request $request){
        $this->validate($request,[
            'kategori' => 'required',
            'nama' => 'required',
            'harga' =>'required',
            'deskripsi' =>'required'
        ]);

        $add = new App\Service;
        $add->nama = $request['nama'];
        $add->id_studio = Auth::user()->id;
        $add->id_category = $request['kategori'];
        $add->deskripsi = $request['deskripsi'];
        $add->harga = $request['harga'];
        $add->save();
        return redirect()->route('studio.layanan');
    }
    public function galery(){
        return view('galery-studio');
    }
    public function galerye(Request $request){
        $this->validate($request,[
            'kategori' => 'required',
            'gambar' => 'required|image'
        ]);
        $tambah = new App\Galery;
        $tambah->id_studio=Auth::user()->id;
        $tambah->id_category=$request['kategori'];
        $getimageName = time().'.'.$request->gambar->getClientOriginalExtension();
        $request->gambar->move('photo', $getimageName);
        $tambah->foto = $getimageName;
        $tambah->save();
        return redirect()->route('studio.galery');
    }
    public function pelaksanaan(){
        $pemesanan = DB::table('requests')->join('services','services.id','=','requests.id_service')->where('id_studio',Auth::user()->id)->where('status request','diterima')->orderBy('requests.created_at','desc')->select('id_costumer','id_category','nama','tempat foto','tanggal foto','requests.id')->get();
        return view('proses-pelksanaan-studio')->with('pemesanan',$pemesanan);
    }
    public function selesai(){
        $pemesanan = DB::table('requests')->join('services','services.id','=','requests.id_service')->where('id_studio',Auth::user()->id)->where('status request','selesai')->orderBy('requests.created_at','desc')->select('id_costumer','id_category','nama','tempat foto','tanggal foto','requests.id')->get();
        return view('selesai-studio')->with('pemesanan',$pemesanan);
    }
}