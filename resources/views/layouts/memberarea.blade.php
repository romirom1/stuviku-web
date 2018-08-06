<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>stuviku</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
</head>

<body>
    <nav class="navbar navbar-default menu-navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand navbar-link brand-stuviku" href="{{ route('index') }}"> <img src="{{ asset('assets/img/logo.png') }}" class="logo-brand"></a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            @if(Auth::guard('costumer')->check())
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right navbar-profile-foto">
                    <li class="dropdown img-profile dropdown-profil">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">
                            <img src="
                    @if(Auth::user()['foto profil']===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ Auth::user()['foto profil'] }}
                    @endif"> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('costumer.dashboard') }}">Lihat Profil</a></li>
                            <li role="presentation"><a href="{{ route('costumer.pemesanan') }}">Dashboard</a></li>
                            <li role="presentation"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right menu-navigasi">
                    <li role="presentation"><a href="{{ route('index') }}">HOME </a></li>
                    <li role="presentation"><a href="{{ route('contact') }}">CONTACT </a></li>
                    <li role="presentation"><a href="{{ route('about') }}">ABOUT US</a></li>
                </ul>
            </div>
            @elseif(Auth::guard('admin')->check())
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right navbar-profile-foto">
                    <li class="dropdown img-profile dropdown-profil">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img src="{{ asset('assets/img/user.png') }}"> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                            <li role="presentation"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right menu-navigasi">
                    <li role="presentation"><a href="{{ route('index') }}">HOME </a></li>
                    <li role="presentation"><a href="{{ route('contact') }}">CONTACT </a></li>
                    <li role="presentation"><a href="{{ route('about') }}">ABOUT US</a></li>
                </ul>
            </div>
            @elseif(Auth::guard('studio')->check())
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right navbar-profile-foto">
                    <li class="dropdown img-profile dropdown-profil">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img src="{{ asset('assets/img/user.png') }}"> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('studio.dashboard') }}">Lihat Profil</a></li>
                            <li role="presentation"><a href="{{ route('studio.suntingprofil') }}">Dashboard</a></li>
                            <li role="presentation"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right menu-navigasi">
                    <li role="presentation"><a href="{{ route('index') }}">HOME </a></li>
                    <li role="presentation"><a href="{{ route('contact') }}">CONTACT </a></li>
                    <li role="presentation"><a href="{{ route('about') }}">ABOUT US</a></li>
                </ul>
            </div>
            @else
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav navbar-right menu-navigasi">
                    <li role="presentation"><a href="{{ route('index') }}">HOME </a></li>
                    <li role="presentation"><a href="{{ route('contact') }}">CONTACT </a></li>
                    <li role="presentation"><a href="{{ route('about') }}">ABOUT US</a></li>
                    @if(Request::is('studio/register')||Request::is('signup')||Request::is('costumer/register'))
                    <li role="presentation" class="btn-login"><a href="{{ route('signin') }}">LOGIN </a></li>
                    @elseif(Request::is('costumer/login')||Request::is('signin')||Request::is('studio/login'))
                    <li role="presentation" class="btn-login"><a href="{{ route('signup') }}">SIGN UP </a></li>
                    @else
                    <li role="presentation" class="btn-login"><a href="{{ route('signin') }}">LOGIN </a></li>
                    <li role="presentation" class="btn-login"><a href="{{ route('signup') }}">SIGN UP </a></li>
                    @endif
                </ul>
            </div>
            @endif
        </div>
    </nav>
    <div class="kontent">
        <div class="row heading-edit-akun">
            <div class="col-md-3 col-sm-3 col-profil">
                <div class="col-foto-profile"><img src="
                    @if(Auth::user()->{'foto profil'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ Auth::user()->{'foto profil'} }}
                    @endif" class="img-fluid img-profile-cust">
                    <h4>{{ Auth::user()->{'nama lengkap'} }}</h4><span>{{ Auth::user()->email }}</span></div>
            </div>
            @yield('bar')
        </div>
        <div class="row row-edit-akun">
            <div class="col-md-3 col-sm-3 col-xs-1 sidenav-profile">
                <ul class="nav nav-tabs nav-samping">
                    @if(Request::is('costumer/sunting-profile'))
                    <li class="profil-btn-nav btn-profil"><a href="{{ route('costumer.suntingprofil') }}">Edit Profil </a></li>
                    <li class="profil-btn-nav btn-pemesanan"><a href="{{ route('costumer.pemesanan') }}">Pemesanan </a></li>
                    @else
                    <li class="profil-btn-nav btn-profil-studio"><a href="{{ route('costumer.suntingprofil') }}">Edit Profil </a></li>
                    <li class="profil-btn-nav btn-permintaan"><a href="{{ route('costumer.pemesanan') }}">Pemesanan </a></li>
                    @endif
                </ul>
            </div>
    @yield('content')
    <footer>
        <p> ©2018 STUVIKU INDONESIA</p>
    </footer>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('assets/js/img-preview.js') }}"></script>
    <script src="{{ asset('assets/js/img-preview-galery.js') }}"></script>
</body>

</html>