<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cấp số nhà trực tuyến</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />
   <link rel="stylesheet" href="css/map.css">
   <link rel="stylesheet" href="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.css" />

</head>
<body>

    

  <header>
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
    <div id="map" >
    </div>   
     <!-- Link leaflet -->
      <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin=""></script>
     {{-- better WMS --}}
     
     <!-- Jquery link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>
    <script src="https://unpkg.com/leaflet-control-geocoder/dist/Control.Geocoder.js"></script>

     <script src="js/L.Geoserver.js"></script>
     <script src="js/map.js"></script>
 
     <!-- Link GeoServer -->
     {{-- <script src="../../node_modules/leaflet-geoserver-request/src/L.Geoserver.js"></script> --}}
     
     
    
     
    
</body>
</html>