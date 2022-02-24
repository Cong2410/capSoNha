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

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
    />
    <link rel="stylesheet" href="{{ asset('css/base.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
  </head>
  <body>
    <div class="app">
      <header class="header">
        <div class="grid">
          <nav class="header__navbar">
            <ul class="header__navbar-list">
              <li class="header__navbar-item header__navbar-logo">
                <a class="header__navbar-item-link" href="/"
                  >Cấp số nhà TPHCM</a
                >
              </li>
            </ul>
            <ul class="header__navbar-list">
              <li class="header__navbar-item --divine">
                <a href="" class="header__navbar-item-link">
                  <!-- <i class="header__navbar-icon far fa-question-circle"></i> -->
                  Nộp hồ sơ
                </a>
              </li>
              <li
                class="header__navbar-item header__navbar-item--bold --divine"
              >
                <a href="" class="header__navbar-item-link">
                  Tra cứu thông tin
                </a>
              </li>
              <li class="header__navbar-item header__navbar-item--bold">
                <a href="" class="header__navbar-item-link"> Thụ lý hồ sơ </a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
      @yield('content')
    </div>
  </body>
</html>
