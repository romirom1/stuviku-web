@extends('layouts.master')
@section('content')
    <div id="bg-konten" class="kontent">
        <div class="row row-register-akses">
            <div class="col-md-7 col-sm-7 col-content"></div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-content-right">
                <h1>LOGIN COSTUMER</h1>
                <form class="form-login" method="post" action="{{ route('costumer.login.submit') }}">
                    {{ csrf_field() }}
                    <input class="form-control login-input{{ $errors->has('email') ? ' has-error' : '' }}" type="email" placeholder="Email" name="email">
                    <input class="form-control login-input{{ $errors->has('password') ? ' has-error' : '' }}" type="password" placeholder="Password" name="password">
                    <button class="btn btn-default btn-masuk" role="button">MASUK</button>
                </form>
            </div>
        </div>
    </div>
@endsection