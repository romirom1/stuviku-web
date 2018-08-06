@extends('layouts.studioarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Galery Anda</h3>
                <a class="btn btn-default btn-edite-studio" type="button" href="{{ route('studio.suntingprofil') }}">Akun </a>
                <a class="btn btn-default btn-edite-studio " role="button" href="{{ route('studio.layanan') }}">Layanan </a>
                <a class="btn btn-default btn-edite-studio margin-galery btn-layanan-studio btn-galery" role="button" href="{{ route('studio.galery') }}">Galery </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                <form class="form-galery-studio" method="post" action="{{ route('studio.galery.submit') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row heading-galery-studio">
                        <div class="col-md-12">
                            <h3>Gambar Layanan</h3></div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Kategori </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <select class="form-control inputan-profil-cust" name="kategori">
                                <option disabled selected hidden>Pilih Kategori</option>
                                <option value="1">Event</option>
                                <option value="2">Family</option>
                                <option value="3">Prewedding</option>
                                <option value="4">wedding</option>
                                <option value="5">Arsitektur</option>
                                <option value="6">Produk</option>
                            </select>
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Gambar </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <div class="bungkus-image-galery"><img src="{{ asset('assets/img/camera.png') }}" id="galery-upload" class="img-galery-studio"></div>
                            <div class="pilih-foto">
                                <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Pilih Foto <input type="file" id="btnInput" name="gambar" accept="image/*">
                                </span>
                                </span>   
                            </div>
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 col-data-profil-cust">
                            <button class="btn btn-default btn-simpan-profil" type="submit">Upload Gambar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection