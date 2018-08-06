@extends('layouts.master')
@section('content')
    <div id="bg-konten" class="kontent">
        <div class="row row-register-akses">
            <div class="col-md-4 col-sm-4 col-content"></div>
            <div class="col-md-4 col-sm-4 col-xs-12 col-content-right">
                <h1>LOGIN ADMIN</h1>
                <form class="form-login" method="POST" action="{{ route('admin.login.submit') }}">
                    {{ csrf_field() }}
                    <input class="form-control login-input" name="email" type="email" placeholder="Email">
                    <input class="form-control login-input" name="password" type="password" placeholder="Password">
                    <button class="btn btn-default btn-masuk" role="button">MASUK</button>
                </form>
            </div>
            <div class="col-md-4 col-sm-4 col-content"></div>
        </div>
    </div>
@endsection