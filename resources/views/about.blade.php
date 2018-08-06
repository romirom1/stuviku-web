@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="bungkus-about">
            <div class="row heading-about">
                <div class="col-md-12">
                    <h2>Tentang Stuviku</h2></div>
            </div>
            <div class="row isine-about">
                <div class="col-md-12">
                    <p>STUVIKU adalah sebuah <em>marketplace</em> dengan sistem <em>on-demand </em>yang memungkinkan fotografer untuk membuat dan mengelola studio virtual secara mudah dan gratis. Sekaligus mempermudah pencari jasa fotografer untuk mencari
                        penyedia jasa fotografer. Cakupan jasa yang disediakan meliputi foto model, produk fotografi, <em>tour &amp; travel, pre wedding</em>, event, dan album. <em>Customer</em> bisa memilih pilihan tersebut dan fotografer yang &nbsp;handal
                        di pilihan tersebut. </p>
                </div>
                <div class="col-md-12"><img src="{{ asset('assets/img/logo.png') }}"></div>
            </div>
            <div class="row row-index">
                <div class="col-md-4 col-kategori-foto">
                    <div class="image-container">
                        <a href="{{ route('layananpemesanan') }}"> <img src="{{ asset('assets/img/prewedding.jpg') }}" class="img-fluid img-index"><span class="text-center">PREWEDDING </span></a>
                    </div>
                </div>
                <div class="col-md-4 col-kategori-foto">
                    <div class="image-container">
                        <a href="{{ route('layananpemesanan') }}"> <img src="{{ asset('assets/img/produk.jpg') }}" class="img-fluid img-index"><span class="text-center">PRODUK </span></a>
                    </div>
                </div>
                <div class="col-md-4 col-kategori-foto">
                    <div class="image-container">
                        <a href="{{ route('layananpemesanan') }}"> <img src="{{ asset('assets/img/event.jpg') }}" class="img-fluid img-index"><span class="text-center">EVENT </span></a>
                    </div>
                </div>
            </div>
            <div class="row row-index">
                <div class="col-md-4 col-kategori-foto">
                    <div class="image-container">
                        <a href="{{ route('layananpemesanan') }}"> <img src="{{ asset('assets/img/wedding.jpg') }}" class="img-fluid img-index"><span class="text-center">WEDDING </span></a>
                    </div>
                </div>
                <div class="col-md-4 col-kategori-foto">
                    <div class="image-container">
                        <a href="{{ route('layananpemesanan') }}"> <img src="{{ asset('assets/img/family.jpg') }}" class="img-fluid img-index"><span class="text-center">FAMILY </span></a>
                    </div>
                </div>
                <div class="col-md-4 col-kategori-foto">
                    <div class="image-container">
                        <a href="{{ route('layananpemesanan') }}"> <img src="{{ asset('assets/img/arsitektur.jpg') }}" class="img-fluid img-index"><span class="text-center">ARSITEKTUR </span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection