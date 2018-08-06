@extends('layouts.master')
@section('content')
    <div id="bg-konten" class="kontent">
        <div class="row row-register-akses">
            <div class="col-md-7 col-sm-7 col-content"></div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-content-right col-regist">
                <h1>REGISTER COSTUMER</h1>
                <form class="form-login" method="post" action="{{ route('costumer.register.submit') }}">
                    {{ csrf_field() }}
                    <input class="form-control register-input " name="username" type="text" placeholder="{{ $errors->has('username') ? ' has-error' : 'Username ' }}">
                    <input class="form-control register-input " name="email" type="email" placeholder="{{ $errors->has('email') ? ' has-error' : 'Email ' }}">
                    <input class="form-control register-input " name="phone" type="text" placeholder="No. Telpon {{ $errors->has('phone') ? ' has-error' : '' }}">
                    <input class="form-control register-input " name="password" type="password" placeholder="{{ $errors->has('password') ? ' has-error' : 'Password ' }}">
                    <input class="form-control register-input " name="password_confirmation" type="password" placeholder="{{ $errors->has('password_confirmation') ? ' has-error' : 'Confirm_Password ' }}">
                    <div class="bungkus-btn-daftar">
                        <!--<a href="{{ route('costumer.login') }}" class="login-disini"> <span>Login disini</span></a>-->
                        <button class="btn btn-default btn-daftar">DAFTAR </button></div>
                </form>
            </div>
        </div>
    </div>
@endsection