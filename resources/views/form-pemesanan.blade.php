@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="row headinge-pemesanan">
            <div class="col-md-12 col-headinge-pemesanan">
                <h2>Pemesanan </h2></div>
        </div>
        <div class="row pemesanan">
            <div class="col-md-1 col-foto-pemesanan"><img src="{{ asset('assets/img/prewedding.jpg') }}"></div>
            <div class="col-md-11 col-isi-pemesanan">
                <h3 class="nama-studio">{{ App\Studio::find($service->id_studio)->{'nama studio'} }}</h3>
                <h3 class="nama-paket">{{ $service->nama }}</h3><span>Rp. {{ number_format($service->harga,2) }}</span></div>
        </div>
        <div class="row form-pemesanan">
            <div class="col-md-12 col-form-pemesanan">
                <form method="post" action="{{ route('costumer.pesan.submit') }}">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_service" value="{{ $service->id }}">
                    <input type="hidden" name="id_costumer" value="{{ Auth::user()->id }}">
                    <input type="hidden" name="tanggalrequest" value="{{ Carbon\Carbon::now() }}"}>
                    <input type="hidden" name="statusrequest" value="belum">
                    <div class="row isi-pemesanan">
                        <div class="col-md-2 label-pemesanan"><span class="label label-default">Lokasi Foto</span></div>
                        <div class="col-md-10 col-data-pemesanan">
                            <input class="form-control inputan-pemesanan" type="text" placeholder="Lokasi" name="tempatfoto" required autofocus>
                        </div>
                    </div>
                    <div class="row isi-pemesanan">
                        <div class="col-md-2 label-pemesanan"><span class="label label-default">Tanggal Foto</span></div>
                        <div class="col-md-10 col-data-pemesanan">
                            <input class="form-control inputan-pemesanan" type="date" name="tanggalfoto" required autofocus>
                        </div>
                    </div>
                    <div class="row btn-pemesanan">
                        <div class="col-md-2 label-pemesanan"></div>
                        <div class="col-md-10 col-btn-pemesanan">
                            <button class="btn btn-default btn-kirim-pesanan" type="submit">Kirim Pesanan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection