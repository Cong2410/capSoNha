<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Nunito', sans-serif;
            background-image: url("/img/tptd.jpeg");
        }
        #text_logo{
            color: white;
            cursor: pointer;
            font-weight: 600;
            font-style: bold;
            font-size: 20px;
        }

        a#text_logo {
            padding-top: 14px;
        }

        a#text_logo:hover {
            color: black;
            text-decoration: none;
            opacity: 0.5;
        }

        li,a {
            
            font-weight: 500;
            font-size: 16px;
            margin-bottom: 15px;
            color: white;
            text-decoration: none;
        }

        .nav_bar li a:hover {
            color: black;
            text-decoration: none;
            opacity: 0.5;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 10%;
            background-color: #dc143c;
            width: auto;
        }

        .nav_bar li{
            list-style: none;
            display: inline-block;
            padding: 18px 15px 0 15px;
        }

        .nav-link {
            color: white
        }

        ol, ul, dl {
    margin-top: 0;
    margin-bottom: 1rem;
    margin-bottom: -36px;
    margin-top: -24px;
}
    </style>
</head>
<body>
    <header>
        <a id="text_logo" href="{{ url('/') }}"> CẤP SỐ NHÀ TP.HCM </a>
        <nav> 
            <ul class="nav_bar">
                <li><a href="{{ url('/document/nophoso') }}">Nộp hồ sơ</a></li>
                <li><a  href="{{ url('/map') }}">Bản đồ quy hoạch</a> </li>
                <li><a  href="{{ url('/document/searchView') }}">Tra cứu hồ sơ</a></li>
                
                <li>
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                        @else
                        <li><a  href="{{ url('/document/dashboard')}}">Quản lý hồ sơ</a></li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </li>
 
            </ul>
        </nav>
     </header>
    <div id="app">
        

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
