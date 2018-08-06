@extends('layouts.studioarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Pengaturan Akun</h3>
                <a class="btn btn-default btn-edite-studio btn-akun" type="button">Akun </a>
                <a class="btn btn-default btn-edite-studio" role="button" href="{{ route('studio.layanan') }}">Layanan </a>
                <a class="btn btn-default btn-edite-studio margin-galery" role="button" href="{{ route('studio.galery') }}">Galery </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                <form class="form-edit-profil-cust" method="post" action="{{ route('studio.suntingprofil.submit') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Username </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Username" name="username" value="{{ $profil['username'] }}">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Nama Studio</span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Nama" name="nama" value="{{ $profil['nama studio'] }}">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Nama Pemilik</span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Nama Pemilik" name="namapemilik" value="{{ $profil['nama pemilik'] }}">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Email </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="email" placeholder="Email" name="email" value="{{ $profil['email'] }}">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Alamat </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Alamat" name="alamat" value="{{ $profil['alamat studio'] }}">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">No. Telpon</span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="No. Telpon" name="phone" value="{{ $profil['no telp'] }}">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Password </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="password" placeholder="Password" name="password">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Konfirm Password </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="password" placeholder="Konfirm Password" name="password_confirmation">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Motto </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Motto" name="motto" value="{{ $profil['motto'] }}">
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Deskripsi </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <textarea class="form-control inputan-profil-cust" placeholder="Deskripsi" name="deskripsi">{{ $profil->deskripsi }}</textarea>
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 col-data-profil-cust">
                            <button class="btn btn-default btn-simpan-profil" type="submit">Simpan Perubahan</button>
                        </div>
                    </div>
                    <div class="foto-bungkus">
                        <div class="form-group">
        <img src="{{ asset('assets/img/user.png') }}" id='img-upload' class="img-fluid" />
        <div class="input-group">
            <span class="input-group-btn">
                <span class="btn btn-default btn-file">
                    Unggah Foto <input type="file" id="imgInp" name="foto">
                </span>
            </span>
            
        </div>
        
    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection