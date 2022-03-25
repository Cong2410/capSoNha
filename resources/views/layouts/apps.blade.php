<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="UTF-8" />
    {{-- <meta http-equiv="X-UA-Compatible" content="IE=edge" /> --}}
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    {{-- <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    /> --}}
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    

  </head>
  <body>
    <div class="app">
      <header >
          <a id="text_logo" href="{{ url('/') }}"> CẤP SỐ NHÀ TP.HCM </a>
          <nav> 
              <ul class="nav_bar">
                  <li><a href="{{ url('/document/nophoso') }}">Nộp hồ sơ</a></li>
                      <li><a  href="{{ url('/map') }}">Bản đồ quy hoạch</a> </li>
                      <li><a  href="{{ url('/document/searchView') }}">Tra cứu hồ sơ</a></li>
                      {{-- <li><a  href="">Quản lý hồ sơ</a></li> --}}
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
      @yield('content')
    </div>
  </body>
</html>
