@extends('layouts.studioarea')
@section('bar')
<div class="col-md-9 col-sm-9 col-heading-edit-studio">
                <h3>Permintaan Masuk</h3>
                <a class="btn btn-default btn-permintaan-masuk-studio btn-req-masuk" type="button" href="{{ route('studio.permintaan') }}">Permintaan Masuk</a>
                <a class="btn btn-default btn-permintaan-masuk-studio" type="button" href="{{ route('studio.pelaksanaan') }}">Proses Pelaksanaan</a>
                <a class="btn btn-default btn-permintaan-masuk-studio margin-selesai" type="button" href="{{ route('studio.selesai') }}">Selesai </a>
                <hr>
            </div>
@endsection
@section('content')
            <div class="col-md-9 col-sm-9">
                @foreach ($pemesanan as $element)
                    <div class="row row-permintaan req-studio">
                    <div class="col-md-9 ket-permintaan-masuk"><span>24 April 2018</span><span>, 20:41 </span>
                        <div class="clearfix"></div>
                        <form class="form-req-studio">
                            <div class="row data-req-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Customer</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ App\Costumer::find($element->id_costumer)->{'nama lengkap'} }}</span></div>
                            </div>
                            <div class="row data-req-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Kategori Foto</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ App\Category::find($element->id_category)->nama }} </span></div>
                            </div>
                            <div class="row data-req-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Nama Paket</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ $element->nama }} </span></div>
                            </div>
                            <div class="row data-req-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Lokasi Foto</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ $element->{'tempat foto'} }} </span></div>
                            </div>
                            <div class="row data-req-studio">
                                <div class="col-md-3 col-sm-3 col-data-permintaan">
                                    <p>Tanggal Foto</p>
                                </div>
                                <div class="col-md-8 col-sm-9 isi-permintaan-req-studio"><span>: {{ $element->{'tanggal foto'} }}</span></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <form method="post" action="{{ route('studio.permintaan.submit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $element->id }}">
                            <input type="hidden" name="status" value="diterima">
                            <button class="btn btn-default btn-terima" type="submit"><i class="glyphicon glyphicon-ok"></i> Terima</button>
                        </form method="post" action="{{ route('studio.permintaan.submit') }}">
                        <form method="post" action="{{ route('studio.permintaan.submit') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $element->id }}">
                            <input type="hidden" name="status" value="ditolak">
                            <button class="btn btn-default btn-tolak" type="submit"><i class="glyphicon glyphicon-remove"></i> Tolak</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection