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
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img src="
                    @if(Auth::guard('costumer')->user()->{'foto profil'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ Auth::guard('costumer')->user()->{'foto profil'} }}
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
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img src="@if(Auth::guard('admin')->user()->{'foto profil'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ Auth::guard('admin')->user()->{'foto profil'} }}
                    @endif"> <span class="caret"></span></a>
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

                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#"><img src="
                    @if(Auth::guard('studio')->user()->{'logo studio'}===null)
                    {{ asset('assets/img/user.png') }}
                    @else                    
                    {{ asset('photo')}}/{{ Auth::guard('studio')->user()->{'logo studio'} }}
                    @endif"> <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a href="{{ route('studio.dashboard') }}">Lihat Profil</a></li>
                            <li role="presentation"><a href="{{ route('studio.permintaan') }}">Dashboard</a></li>
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