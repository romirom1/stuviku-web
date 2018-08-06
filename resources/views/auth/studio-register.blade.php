@extends('layouts.master')
@section('content')
    <div id="bg-konten" class="kontent">
        <div class="row row-register-akses">
            <div class="col-md-7 col-sm-7 col-content"></div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-content-right col-regist">
                <h2 style="color:white;"><center>REGISTER STUDIO</center></h2>
                <form class="form-login" method="post" action="{{ route('studio.register.submit') }}">
                    {{ csrf_field() }}
                    <input class="form-control register-input " name="username" type="text" placeholder="{{ $errors->has('username') ? ' Terjadi Kesalahan Pada Isian ini' : 'Username ' }}" required autofocus>
                    <input class="form-control register-input " name="nama" type="text" placeholder="{{ $errors->has('nama') ? ' Terjadi Kesalahan Pada Isian ini' : 'Nama Studio ' }}" required autofocus>
                    <input class="form-control register-input " name="namapemilik" type="text" placeholder="{{ $errors->has('namapemilik') ? ' Terjadi Kesalahan Pada Isian ini' : 'Nama Pemilik ' }}" required autofocus>
                    <input class="form-control register-input " name="email" type="email" placeholder="{{ $errors->has('email') ? ' Terjadi Kesalahan Pada Isian ini' : 'Email ' }}" required autofocus>
                    <input class="form-control register-input " name="phone" type="text" placeholder="{{ $errors->has('phone') ? ' Terjadi Kesalahan Pada Isian ini' : 'No Telepon ' }}" required autofocus>
                    <input class="form-control register-input " name="password" type="password" placeholder="{{ $errors->has('password') ? ' Terjadi Kesalahan Pada Isian ini' : 'Password ' }}" required autofocus>
                    <input class="form-control register-input " name="password_confirmation" type="password" placeholder="{{ $errors->has('password_confirmation') ? ' Terjadi Kesalahan Pada Isian ini' : 'Confirm_Password ' }}" required autofocus>
                    <div class="bungkus-btn-daftar">
                        <!--<a href="{{ route('costumer.login') }}" class="login-disini"> <span>Login disini</span></a>-->
                        <button class="btn btn-default btn-daftar">DAFTAR </button></div>
                </form>
            </div>
        </div>
    </div>
@endsection