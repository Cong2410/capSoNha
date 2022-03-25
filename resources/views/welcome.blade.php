<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" /> --}}

        <title>Cấp số nhà trực tuyến</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        

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

            .navbar-nav {
                display: inline !important;
            }

            .nav_bar li{
                list-style: none;
                display: inline-block;
                padding: 18px 15px 0 15px;
            }
        </style>
    </head>
    <body class="antialiased">
        <header>
            <a id="text_logo" href="{{ url('/') }}"> CẤP SỐ NHÀ TP.HCM </a>
            <nav> 
                <ul class="nav_bar">
                    <li><a href="{{ url('/document/nophoso') }}">Nộp hồ sơ</a></li>
                    <li><a  href="{{ url('/map') }}">Bản đồ quy hoạch</a> </li>
                    <li><a  href="{{ url('/document/searchView') }}">Tra cứu hồ sơ</a></li>
                    
                    <li>
                        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                            @if (Route::has('login'))
                                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                    @auth
                                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Trang chủ</a>
                                    @else
                                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Đăng nhập</a>
                
                                        
                                    @endauth
                                </div>
                            @endif 
                        </div>
                    </li>
                </ul>
            </nav>
         </header>
        
    </body>
</html>
