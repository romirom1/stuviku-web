@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="row heading-profil-studio">
            <div class="col-md-12">
                <h3>Profil Studio</h3></div>
        </div>
        <div class="row penilaian-studio">
            <div class="col-md-12 col-penilaian">
                <!--<button class="btn btn-default btn-penilaian" type="button">Beri Penilaian</button>--><span>{{ $profil->rating }}/5 </span>
                <p>Penilaian </p>
            </div>
        </div>
        <div class="row foto-profil-studio">
            <div class="col-md-3 col-profil-studio">
                <div class="bungkus-img-profil"><img src="
                    @if($profil->{'logo studio'}===null)
                    {{ asset('assets/img/prewedding.jpg') }}
                    @else                    
                    {{ asset('photo')}}/{{ $profil->{'logo studio'} }}
                    @endif"></div>
                <div class="clearfix"></div>
                <div class="bungkus-name-profil">
                    <p>{{ $profil->username }}</p>
                </div>
                <div class="clearfix"></div>
                <div class="bungkus-motto">
                    <p>"{{ $profil->motto }}" </p><img src="{{ asset('assets/img/camera.png') }}" class="img-motto"></div>
            </div>
            <div class="col-md-9 col-data-studio">
                <form>
                    <div class="row form-biodata-studio">
                        <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/studio.png') }}"><span>Nama Studio</span></div>
                        <div class="col-md-12 col-data-studio">
                            <p>{{ $profil->{'nama studio'} }}</p>
                        </div>
                    </div>
                    <div class="row form-biodata-studio">
                        <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/lokasi.png') }}"><span>Alamat </span></div>
                        <div class="col-md-12 col-data-studio">
                            <p>{{ $profil->{'alamat studio'} }}</p>
                        </div>
                    </div>
                    <div class="row form-biodata-studio">
                        <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/email.png') }}"><span>Email </span></div>
                        <div class="col-md-12 col-data-studio">
                            <p>{{ $profil->email }}</p>
                        </div>
                    </div>
                    <div class="row form-biodata-studio">
                        <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/telephone.png') }}"><span>No. Telepon</span></div>
                        <div class="col-md-12 col-data-studio">
                            <p>{{ $profil->{'no telp'} }}</p>
                        </div>
                    </div>
                    <div class="row form-biodata-studio">
                        <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/galeri.png') }}"><span>Galery </span></div>
                        <div class="col-md-12 col-data-studio"><img></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection