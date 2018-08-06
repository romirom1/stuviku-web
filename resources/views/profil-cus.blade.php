@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="row heading-profil-cust">
            <div class="col-md-12">
                <h3>Profil Costumer</h3></div>
        </div>
        <div class="row foto-profil-cust">
            <div class="col-md-12">
                <div class="bungkus-img-profil"><img src="@if($profil->{'foto profil'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ $profil->{'foto profil'} }}
                    @endif"></div>
                <div class="clearfix"></div>
                <div class="bungkus-name-profil">
                    <p>{{ $profil['username'] }}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row biodata-cust">
        <div class="col-md-12 col-label-profil"><img src="{{ asset('assets/img/studio.png') }}"><span>Nama Lengkap</span></div>
        <div class="col-md-12 col-data-profil">
            <p>{{ $profil['nama lengkap'] }}</p>
        </div>
        <div class="col-md-12 col-label-profil"><img src="{{ asset('assets/img/lokasi.png') }}"><span>Alamat </span></div>
        <div class="col-md-12 col-data-profil">
            <p>{{ $profil['alamat'] }}</p>
        </div>
        <div class="col-md-12 col-label-profil"><img src="{{ asset('assets/img/email.png') }}"><span>Email </span></div>
        <div class="col-md-12 col-data-profil">
            <p>{{ $profil['email'] }}</p>
        </div>
        <div class="col-md-12 col-label-profil"><img src="{{ asset('assets/img/telephone.png') }}"><span>No. Telepon</span></div>
        <div class="col-md-12 col-data-profil">
            <p>{{ $profil['no hp'] }}</p>
        </div>
    </div>
@endsection