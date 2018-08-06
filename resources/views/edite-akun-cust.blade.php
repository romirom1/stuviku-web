@extends('layouts.memberarea')
@section('bar')
            <div class="col-md-9 col-sm-9 col-heading">
                <button class="btn btn-default btn-akun" type="button">Akun </button>
                <h3>Pengaturan Akun</h3>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                <form class="form-edit-profil-cust" method="post" action="{{ route('costumer.suntingprofil.submit') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Username </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Username" name="username" value="{{ $profil->username }}">
                            @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>ada kesalahan pada username</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Nama </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Nama" name="nama" value="{{ $profil['nama lengkap'] }}">
                            @if ($errors->has('nama'))
                                    <span class="help-block">
                                        <strong>ada kesalahan pada nama</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Jenis Kelamin</span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <div class="radio radio-profil-male">
                                <label class="radio-inline"><input type="radio" name="kelamin" value="l" {{ $profil['jenis kelamin']==="l" ? 'checked' : '' }}>Laki-laki </label>
                            </div>
                            <div class="radio radio-profil-female">
                                <label class="radio-inline"><input type="radio" name="kelamin" value="p" {{ $profil['jenis kelamin']==="p" ? 'checked' : '' }}>Perempuan</label>
                            </div>
                            @if ($errors->has('kelamin'))
                                    <span class="help-block">
                                        <strong>ada kesalahan pada kelamin</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Email </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="email" placeholder="Email" name="email" value="{{ $profil['email'] }}">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>ada kesalahan pada email</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Alamat </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Alamat" name="alamat" value="{{ $profil['alamat'] }}">
                            @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>ada kesalahan pada alamat</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">No. Telpon</span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="No. Telpon" name="phone" value="{{ $profil['no hp'] }}">
                            @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>ada kesalahan pada no hp</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Password </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="password" placeholder="Password" name="password">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>ada kesalahan pada password</strong>
                                    </span>
                                @endif
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Konfirm Password </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="password" placeholder="Konfirm Password" name="password_confirmation">
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
                    Unggah Foto <input type="file" accept="image/*" id="imgInp" name="foto">
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