
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cssUI.css') }}" > 
    

    
    <title>Cấp số nhà trực tuyến</title>
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
     <div class="title_dashboard">
         <h1>Mã hồ sơ</h1>
     </div>
     <div class="ho_so_dang_thu_ly">
         <div class="title_dang_thu_ly">
             <p>Trả về mã hồ sơ bạn vừa nhập</p>
         </div>
     </div>
  <div class="form__mhs">
    <p style="font-size: 20px ;text-align: center;">Mã hồ sơ của bạn là: </p>
    <input  style="font-size: 18px; margin-left: 15px" type="text" name="mahoso" value="{{$mahoso}}"  placeholder=" Mã hồ sơ..." disabled>
  </div>
  <div  >
    <button id="button__back"  href="/document/nophoso"><a href="/document/nophoso" style="text-decoration: none">NỘP HỒ SƠ KHÁC</a></button>
  </div>
  
  
 

</body>
</html>