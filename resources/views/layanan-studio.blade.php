@extends('layouts.studioarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Layanan Anda</h3>
                <a class="btn btn-default btn-edite-studio" type="button" href="{{ route('studio.suntingprofil') }}">Akun </a>
                <a class="btn btn-default btn-edite-studio btn-layanan" role="button" href="{{ route('studio.layanan') }}">Layanan </a>
                <a class="btn btn-default btn-edite-studio margin-galery" role="button" href="{{ route('studio.galery') }}">Galery </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                <form class="form-edit-profil-cust" method="post" action="{{ route('studio.postlayanan') }}">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <button class="btn btn-default btn-tambah-layanan" type="button" href="{{ route('studio.layanan') }}"><i class="fa fa-plus"></i> Tambah Layanan</button>
                        </div>
                    </div>
                    <div class="row heading-layanan-studio">
                        <div class="col-md-12">
                            <h3>Layanan apa yang anda berikan</h3></div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Kategori </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <select class="form-control inputan-profil-cust" name="kategori">
        <option >Pilih Kategori</option>
        <option value="1">Event</option>
        <option value="2">Family</option>
        <option value="3">Prewedding</option>
        <option value="4">Wedding</option>
        <option value="5">Arsitektur</option>
        <option value="6">Produk</option>
</select>
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Nama Layanan</span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Nama Layanan" name="nama" required autofocus>
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Harga </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <input class="form-control inputan-profil-cust" type="text" placeholder="Harga" name="harga" required autofocus>
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3 label-profile"><span class="label label-default">Deskripsi </span></div>
                        <div class="col-md-9 col-data-profil-cust">
                            <textarea class="form-control inputan-profil-cust" placeholder="Deskripsi" name="deskripsi" required autofocus></textarea>
                        </div>
                    </div>
                    <div class="row row-edit-data-cust">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 col-data-profil-cust">
                            <button class="btn btn-default btn-simpan-profil" type="submit">Tambah</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection