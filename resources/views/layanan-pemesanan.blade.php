@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="row heading-profil-studio">
            <div class="col-md-12">
                <h3>Layanan </h3></div>
        </div>
        <form method="get" action="{{ route('layananpemesanan') }}">
            <div class="row layanan-pilih-kategori">
            <div class="col-md-12 col-lokasi-kategori">
                <p>Kategori </p>
                <select class="form-control layanan-kategori" name="kategori">
        <option value="">Semua Kategori</option>
        <option 
        @if ($val==='1')
            selected
        @endif value="1">Event</option>
        <option 
        @if ($val==='2')
            selected
        @endif value="2">Family</option>
        <option 
         @if ($val==='3')
            selected
        @endif value="3">Prewedding</option>
        <option 
         @if ($val==='4')
            selected
        @endif value="4">Wedding</option>
        <option 
         @if ($val==='5')
            selected
        @endif value="5">Arsitektur</option>
        <option 
         @if ($val==='6')
            selected
        @endif value="6">Produk</option>
                </select>
                <!--<p>Lokasi </p>
                <select class="form-control layanan-kategori" name="kota">
        <option disabled selected hidden>Pilih Kota</option>
        <option value="">Semua Kota</option>
        <option value="1">Jakarta</option>
        <option value="2">Surabaya</option>
        <option value="3">Medan</option>
        <option value="4">Bandung</option>
        <option value="5">Palembang</option>
        <option value="6">Semarang</option>
        <option value="7">Makasar</option>
        <option value="8">Pekanbaru</option>
        <option value="9">Batam</option>
        <option value="10">Banjarmasin</option>
        <option value="11">Balikpapan</option>
                </select>-->
        <button class="btn btn-default btn-pesan" type="submit">Cari </button>
            </div>
        </div>
        </form>
        
        <div class="bungkus-layanan">
            @foreach ($produk as $element)
                <div class="row daftar-layanan-pemesanan">
                <div class="col-md-4 col-data-layanan-pemesanan">
                    <form>
                        <div class="row data-layanan-pemesanan">
                            <div class="col-md-2 col-biodata-head"><img src="
                    @if(App\Studio::find($element->id_studio)->{'logo studio'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ App\Studio::find($element->id_studio)->{'logo studio'} }}
                    @endif"></div>
                            <div class="col-md-10 col-biodata-head">
                                <h3><a href="{{ route('profilstud',['id'=>$element->id_studio]) }}" target="blank">{{ App\Studio::find($element->id_studio)->{'nama studio'} }}</a></h3></div>
                        </div>
                        <div class="row data-layanan-pemesanan">
                            <div class="col-md-2 col-biodata-head"></div>
                            <div class="col-md-10 col-biodata-isi"><span class="paketan">{{ $element->nama }}</span>
                                <p>{{ $element->deskripsi }}</p><span class="harga-layanan">Rp. {{ number_format($element->harga,2) }} </span></div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8 col-data-layanan-pemesanan">
                    <form method="post" action="{{ route('costumer.pesan') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id_service" value="{{ $element->id }}">
                        <button class="btn btn-default btn-pesan" type="submit" target="blank" >PESAN </button>
                    </form>
                    
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection