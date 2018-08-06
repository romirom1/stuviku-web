@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="bungkus-about">
            <div class="row heading-about">
                <div class="col-md-12">
                    <h2>Contact Us</h2></div>
            </div>
            <div class="row isine-kontak">
                <div class="col-md-12">
                    <p>Silahkan menghubungi kami melalui Channel berikut :</p>
                </div>
                <div class="col-md-12">
                    <form>
                        <div class="row form-biodata-studio">
                            <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/studio.png') }}"><span>Alamat Kantor Pusat</span></div>
                            <div class="col-md-12 col-data-studio">
                                <p>Karah 1 Nomor 25D, Kec. Jambangan, Kota Surabaya</p>
                            </div>
                        </div>
                        <div class="row form-biodata-studio">
                            <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/lokasi.png') }}"><span>Alamat Cabang</span></div>
                            <div class="col-md-12 col-data-studio">
                                <p>Karah 1 Nomor 25D, Kec. Jambangan, Kota Surabaya </p>
                            </div>
                        </div>
                        <div class="row form-biodata-studio">
                            <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/email.png') }}"><span>Email</span></div>
                            <div class="col-md-12 col-data-studio">
                                <p>admin@stuviku.co.id </p>
                            </div>
                        </div>
                        <div class="row form-biodata-studio">
                            <div class="col-md-12 col-data-studio"><img src="{{ asset('assets/img/telephone.png') }}"><span>No. Telepon</span></div>
                            <div class="col-md-12 col-data-studio">
                                <p>081 555 555 555</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection