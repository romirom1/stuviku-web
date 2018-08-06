@extends('layouts.master')
@section('content')
    <div class="kontent">
        <div class="row heading-edit-akun">
            <div class="col-md-3 col-sm-3 col-profil">
                <div class="col-foto-admin"><img src="@if(Auth::guard('admin')->user()->{'foto profil'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ Auth::guard('admin')->user()->{'foto profil'} }}
                    @endif" class="img-fluid img-profile-cust">
                    <h4>Admin Stuviku</h4><span>{{ Auth::guard('admin')->user()->nama }}</span></div>
            </div>
            <div class="col-md-9 col-sm-9 col-heading">
                <button class="btn btn-default btn-akun" type="button">Permintaan Masuk</button>
                <h3>Permintaan Persetujuan</h3>
                <hr>
            </div>
        </div>
        <div class="row row-edit-akun">
            <div class="col-md-3 col-sm-3 col-xs-1 sidenav-profile">
                <ul class="nav nav-tabs nav-samping">
                    <li class="profil-btn-nav btn-profil"><a href="#">Permintaan </a></li>
                </ul>
            </div>
            <div class="col-md-9 col-sm-9 col-permintaan-kanan">
                @foreach ($akun as $element)
                    <div class="row row-permintaan">
                    <div class="col-md-9 ket-permintaan-masuk"><span>{{ $element->created_at }}</span>
                        <div class="clearfix"></div><img src="assets/img/user.png">
                        <h3>{{ $element->{'nama studio'} }}</h3>
                        <form class="form-permintaan-admin">
                            <div class="row data-permintaan-masuk">
                                <div class="col-md-2 col-data-permintaan">
                                    <p>Email </p>
                                </div>
                                <div class="col-md-10 col-isi-permintaan"><span class="isi-permintaan"> {{ $element->email }} </span></div>
                            </div>
                            <div class="row data-permintaan-masuk">
                                <div class="col-md-2 col-data-permintaan">
                                    <p>Alamat </p>
                                </div>
                                <div class="col-md-10 col-isi-permintaan"><span class="isi-permintaan">{{ $element->{'alamat studio'} }}</span></div>
                            </div>
                            <div class="row data-permintaan-masuk">
                                <div class="col-md-2 col-data-permintaan">
                                    <p>No.telpon </p>
                                </div>
                                <div class="col-md-10 col-isi-permintaan"><span class="isi-permintaan">{{ $element->{'no telp'} }} </span></div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-3">
                        <form method="post" action="{{ route('admin.status.submit1') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $element->id }}">
                            <button class="btn btn-default btn-terima" type="submit"><i class="glyphicon glyphicon-ok"></i> Terima</button>
                        </form>
                        <form method="post" action="{{ route('admin.status.submit2') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $element->id }}">
                            <button class="btn btn-default btn-tolak" type="submit"><i class="glyphicon glyphicon-remove"></i> Tolak</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection