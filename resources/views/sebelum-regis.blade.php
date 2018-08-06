@extends('layouts.master')
@section('content')
    <div id="bg-konten" class="kontent">
        <div class="row row-register-akses">
            <div class="col-md-7 col-sm-7 col-content"></div>
            <div class="col-md-5 col-sm-5 col-xs-12 col-content-right">
                <h3>Buat Akun Sebagai</h3>
                <hr id="garis"><a class="btn btn-default btn-option-regis btn-studio" role="button" href="{{ route('studio.register') }}">STUDIO </a><a class="btn btn-default btn-option-regis btn-customer" role="button" href="{{ route('costumer.register') }}">CUSTOMER </a></div>
        </div>
    </div>
@endsection