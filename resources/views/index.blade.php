@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="row row-index">
            <div class="col-md-12 col-heading-index">
                <h3>Kategori Foto</h3>
                <hr>
            </div>
        </div>
        <div class="row row-index">
            <div class="col-md-4 col-kategori-foto">
                <div class="image-container">
                    <a href="{{ route('layananpemesanan') }}?kategori=3"> <img src="assets/img/prewedding.jpg" class="img-fluid img-index"><span class="text-center">PREWEDDING </span></a>
                </div>
            </div>
            <div class="col-md-4 col-kategori-foto">
                <div class="image-container">
                    <a href="{{ route('layananpemesanan') }}?kategori=6"> <img src="assets/img/produk.jpg" class="img-fluid img-index"><span class="text-center">PRODUK </span></a>
                </div>
            </div>
            <div class="col-md-4 col-kategori-foto">
                <div class="image-container">
                    <a href="{{ route('layananpemesanan') }}?kategori=1"> <img src="assets/img/event.jpg" class="img-fluid img-index"><span class="text-center">EVENT </span></a>
                </div>
            </div>
        </div>
        <div class="row row-index">
            <div class="col-md-4 col-kategori-foto">
                <div class="image-container">
                    <a href="{{ route('layananpemesanan') }}?kategori=4"> <img src="assets/img/wedding.jpg" class="img-fluid img-index"><span class="text-center">WEDDING </span></a>
                </div>
            </div>
            <div class="col-md-4 col-kategori-foto">
                <div class="image-container">
                    <a href="{{ route('layananpemesanan') }}?kategori=2"> <img src="assets/img/family.jpg" class="img-fluid img-index"><span class="text-center">FAMILY </span></a>
                </div>
            </div>
            <div class="col-md-4 col-kategori-foto">
                <div class="image-container">
                    <a href="{{ route('layananpemesanan') }}?kategori=5"> <img src="assets/img/arsitektur.jpg" class="img-fluid img-index"><span class="text-center">ARSITEKTUR </span></a>
                </div>
            </div>
        </div>
    </div>
@endsection