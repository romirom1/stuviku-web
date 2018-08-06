@extends('layouts.memberarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Pemesanan Studio</h3>
                <a class="btn btn-default btn-pemesanan-cust btn-order-cust" type="button" href="{{ route('costumer.pemesanan') }}">Pemesanan</a>
                <a class="btn btn-default btn-pemesanan-cust" type="button" href="{{ route('costumer.statuspemesanan') }}">Status</a>
                <a class="btn btn-default btn-pemesanan-cust" type="button" href="{{ route('costumer.konfirmasipemesanan') }}">Konfirmasi </a>
                <a class="btn btn-default btn-pemesanan-cust margin-selesai" type="button" href="{{ route('costumer.selesaipemesanan') }}">Selesai </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                <div class="row row-permintaan req-studio">
                    @foreach ($pemesanan as $element)
                    <div class="col-md-12 ket-permintaan-masuk"><span>{{ $element->{'tanggal request'} }}</span>
                        <div class="clearfix"></div>
                            <form class="form-req-studio">
                            <div class="row data-req-studio">
                                <div class="col-md-2 col-sm-3 col-data-permintaan">
                                    <p>Nama Studio</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ App\Studio::find(App\Service::find($element->id_service)->id_studio)->{'nama studio'} }}</span></div>
                            </div>
                            <div class="row data-req-studio">
                                <div class="col-md-2 col-sm-3 col-data-permintaan">
                                    <p>Kategori Foto</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ App\Category::find(App\Service::find($element->id_service)->id_category)->{'nama'} }} </span></div>
                            </div>
                            <div class="row data-req-studio">
                                <div class="col-md-2 col-sm-3 col-data-permintaan">
                                    <p>Lokasi Foto</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ $element->{'tempat foto'} }} </span></div>
                            </div>
                            <div class="row data-req-studio">
                                <div class="col-md-2 col-sm-3 col-data-permintaan">
                                    <p>Tanggal Foto</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ $element->{'tanggal foto'} }}</span></div>
                            </div>
                        </form>
                    </div>@endforeach
                </div>
            </div>
        </div>
    </div>
@endsection