@extends('layouts.memberarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Konfirmasi Pelaksanaan</h3>
                <a class="btn btn-default btn-pemesanan-cust" type="button" href="{{ route('costumer.pemesanan') }}">Pemesanan</a>
                <a class="btn btn-default btn-pemesanan-cust" type="button" href="{{ route('costumer.statuspemesanan') }}">Status</a>
                <a class="btn btn-default btn-pemesanan-cust btn-konfirmasi" type="button" href="{{ route('costumer.konfirmasipemesanan') }}">Konfirmasi </a>
                <a class="btn btn-default btn-pemesanan-cust margin-selesai" type="button" href="{{ route('costumer.selesaipemesanan') }}">Selesai </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                @foreach ($pemesanan as $element)
                    <div class="bungkus-status-pemesanan">
                    <div class="row row-konfirmasi-cust">
                        <div class="col-md-1 col-img-konfirmasi"><img src="@if(App\Studio::find(App\Service::find($element->id_service)->id_studio)->{'logo studio'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ App\Studio::find(App\Service::find($element->id_service)->id_studio)->{'logo studio'} }}
                    @endif"></div>
                        <div class="col-md-11 col-heading-konfirmasi">
                            <h3>{{ App\Studio::find(App\Service::find($element->id_service)->id_studio)->{'nama studio'} }} </h3></div>
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
                                    <div class="col-md-9 col-sm-9 col-pemesanan"><span>: {{ $element->{'tanggal foto'} }}</span></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-5 col-konfirmasi-harga">
                            <form method="post" action="{{ route('costumer.konfirmasipemesanan.submit') }}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{ $element->id }}">
                                <input type="hidden" name="status" value="selesai">
                                <span>Total Pembayaran : </span>
                                <p>Rp. {{ number_format(App\Service::find($element->id_service)->harga) }}</p>
                                <div class="clearfix"></div><span>Konfirmasi Pelaksanaan :</span>
                                    <button class="btn btn-default btn-done-konfirmasi" type="submit">Selesai </button>
                            </form>
                        </div>
                    </div>
                </div>
                <br>
                <hr> 
                @endforeach
            </div>
        </div>
    </div>
@endsection