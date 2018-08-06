@extends('layouts.studioarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Permintaan Masuk</h3>
                <a class="btn btn-default btn-permintaan-masuk-studio" type="button" href="{{ route('studio.permintaan') }}">Permintaan Masuk</a>
                <a class="btn btn-default btn-permintaan-masuk-studio btn-proses-studio" type="button" href="{{ route('studio.pelaksanaan') }}">Proses Pelaksanaan</a>
                <a class="btn btn-default btn-permintaan-masuk-studio margin-selesai" type="button" href="{{ route('studio.selesai') }}">Selesai </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                @foreach ($pemesanan as $element)
                    <div class="row heading-proses-studio">
                    <div class="col-md-1 col-heading-proses"><img src="@if(App\Costumer::find($element->id_costumer)->{'foto profil'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ App\Costumer::find($element->id_costumer)->{'foto profil'} }}
                    @endif"></div>
                    <div class="col-md-9 col-heading-proses">
                        <h3>{{ App\Costumer::find($element->id_costumer)->{'nama lengkap'} }}</h3></div>
                </div>
                <div class="row row-permintaan">
                    <div class="col-md-8 ket-permintaan-masuk">
                        <form class="form-req-studio">
                            <div class="row data-proses-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Nama Customer</p>
                                </div>
                                <div class="col-md-9 col-sm-9 isi-proses-studio"><span>: {{ App\Costumer::find($element->id_costumer)->{'nama lengkap'} }}</span></div>
                            </div>
                            <div class="row data-proses-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Kategori Foto</p>
                                </div>
                                <div class="col-md-9 col-sm-9 isi-proses-studio"><span>: {{ App\Category::find($element->id_category)->nama }} </span></div>
                            </div>
                            <div class="row data-proses-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Nama Paket</p>
                                </div>
                                <div class="col-md-9 col-sm-9 isi-proses-studio"><span>: {{ $element->nama }} </span></div>
                            </div>
                            <div class="row data-proses-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Lokasi Foto</p>
                                </div>
                                <div class="col-md-9 col-sm-9 isi-proses-studio"><span>: {{ $element->{'tempat foto'} }} </span></div>
                            </div>
                            <div class="row data-proses-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Tanggal Foto</p>
                                </div>
                                <div class="col-md-9 col-sm-9 isi-proses-studio"><span>: {{ $element->{'tanggal foto'} }}</span></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 col-harga-proses"><span>Total Pembayaran :</span>
                        <p>Rp. {{ number_format(App\Service::find(App\Request::find($element->id)->id_service)->harga) }}</p>
                        <button class="btn btn-default btn-hubungi-cust" type="button">Hubungi Customer</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection