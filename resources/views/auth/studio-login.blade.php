@extends('layouts.master')
@section('content')
    <div id="bg-konten" class="kontent">
        <div class="row row-register-akses">
            <div class="col-md-7 col-sm-7 col-content"></div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-content-right">
                <h1>LOGIN STUDIO</h1>
                <form class="form-login" method="POST" action="{{ route('studio.login.submit') }}">
                    {{ csrf_field() }}
                    <input class="form-control login-input" name="email" type="email" placeholder="Email">
                    <input class="form-control login-input" name="password" type="password" placeholder="Password">
                    <button class="btn btn-default btn-masuk" role="button">MASUK</button>
                </form>
            </div>
        </div>
    </div>
@endsection