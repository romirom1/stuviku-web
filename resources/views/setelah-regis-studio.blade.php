@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="bungkus-notif-regis">
            <div class="row heading-about">
                <div class="col-md-12">
                    <h2>Pendaftaran Berhasil</h2></div>
            </div>
            <div class="row heading-about">
                <div class="col-md-12"><i class="fa fa-quote-left" id="quot-notif"></i>
                    <p>Silahkan datang ke kantor cabang terdekat untuk mengaktifkan akun anda, dengan syarat sebagai berikut :</p>
                    <p>1. Membawa perlengkapan fotografi yang anda punya</p>
                    <p>2. Membawa Identitas diri (KTP/SIM dan Kartu Keluarga) </p>
                    <p>3. Seluruh Tim Studio anda harus datang dan membawa berkas-berkas di atas.</p><i class="fa fa-quote-right" id="notif-right"></i></div>
                <div class="col-md-12">
                    <p>Silahkan ke menu <a href="{{ route('contact') }}">Kontak </a> untuk melihat alamat cabang terdekat.</p>
                </div>
            </div>
        </div>
    </div>
@endsection