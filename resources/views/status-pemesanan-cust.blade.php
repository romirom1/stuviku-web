@extends('layouts.memberarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Status Pemesanan</h3>
                <a class="btn btn-default btn-pemesanan-cust" type="button" href="{{ route('costumer.pemesanan') }}">Pemesanan</a>
                <a class="btn btn-default btn-pemesanan-cust btn-status" type="button" href="{{ route('costumer.statuspemesanan') }}">Status</a>
                <a class="btn btn-default btn-pemesanan-cust" type="button" href="{{ route('costumer.konfirmasipemesanan') }}">Konfirmasi </a>
                <a class="btn btn-default btn-pemesanan-cust margin-selesai" type="button" href="{{ route('costumer.selesaipemesanan') }}">Selesai </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                @foreach ($pemesanan as $element)
                    <div class="bungkus-status-pemesanan">
                    @if($element->{'status request'}==='belum')
                    <div class="row row-pemesanan-cust">
                        <div class="col-md-1 col-pemesanan-belum"><i class="fa fa-question"></i></div>
                        <div class="col-md-11">
                            <h3>Pesanan Belum Disetujui</h3>
                            <p id="oleh">Oleh </p>
                            <p>{{ App\Studio::find(App\Service::find($element->id_service)->id_studio)->{'nama studio'} }} </p>
                        </div>
                    </div>
                    <div class="row isi-pemesanan-cust">
                        <div class="col-md-7 col-pemesanan">
                            <form class="form-pemesanan-cust">
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Kategori Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ App\Category::find(App\Service::find($element->id_service)->id_category)->{'nama'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Nama Paket</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ App\Service::find($element->id_service)->{'nama'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Lokasi Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ $element->{'tempat foto'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Tanggal Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ $element->{'tanggal foto'} }} </span></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-pemesanan-harga"><span>Total Pembayaran : </span>
                            <p>Rp. {{ number_format(App\Service::find($element->id_service)->harga) }}</p>
                        </div>
                    </div>
                    @elseif($element->{'status request'}==='diterima')
                    <div class="row row-pemesanan-cust">
                        <div class="col-md-1 col-pemesanan"><i class="fa fa-check"></i></div>
                        <div class="col-md-11">
                            <h3>Pesanan Telah Disetujui</h3>
                            <p id="oleh">Oleh </p>
                            <p>{{ App\Studio::find(App\Service::find($element->id_service)->id_studio)->{'nama studio'} }} </p>
                        </div>
                    </div>
                    <div class="row isi-pemesanan-cust">
                        <div class="col-md-7 col-pemesanan">
                            <form class="form-pemesanan-cust">
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Kategori Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ App\Category::find(App\Service::find($element->id_service)->id_category)->{'nama'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Nama Paket</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ App\Service::find($element->id_service)->{'nama'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Lokasi Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ $element->{'tempat foto'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Tanggal Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ $element->{'tanggal foto'} }} </span></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-pemesanan-harga"><span>Total Pembayaran : </span>
                            <p>Rp. {{ number_format(App\Service::find($element->id_service)->harga) }}</p>
                        </div>
                    </div>
                    @elseif($element->{'status request'}==='ditolak')
                    <div class="row row-pemesanan-cust">
                        <div class="col-md-1 col-pemesanan"><i class="fa fa-remove"></i></div>
                        <div class="col-md-11">
                            <h3>Pesanan Ditolak</h3>
                            <p id="oleh">Oleh </p>
                            <p>{{ App\Studio::find(App\Service::find($element->id_service)->id_studio)->{'nama studio'} }} </p>
                        </div>
                    </div>
                    <div class="row isi-pemesanan-cust">
                        <div class="col-md-7 col-pemesanan">
                            <form class="form-pemesanan-cust">
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Kategori Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ App\Category::find(App\Service::find($element->id_service)->id_category)->{'nama'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Nama Paket</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ App\Service::find($element->id_service)->{'nama'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Lokasi Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ $element->{'tempat foto'} }} </span></div>
                                </div>
                                <div class="row data-req-studio">
                                    <div class="col-md-3 col-sm-3 col-pemesanan">
                                        <p>Tanggal Foto</p>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ $element->{'tanggal foto'} }} </span></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-pemesanan-harga"><span>Total Pembayaran : </span>
                            <p>Rp. {{ number_format(App\Service::find($element->id_service)->harga) }}</p>
                        </div>
                    </div>
                    @endif
                    
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection