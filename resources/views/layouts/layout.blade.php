
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
         <h1>Nộp hồ sơ trực tuyến</h1>
     </div>
     <div class="ho_so_dang_thu_ly">
         <div class="title_dang_thu_ly">
             <p>Điền thông tin hồ sơ</p>
         </div>
     </div>
        
            {{-- <form method="get" action="{{url('/documents')}}"> --}}
        <form method="post" action="{{route('document.store')}}">
            
            <div class="input__form">
                <table border="0">
                    <tr>
                        <td class="info__inline"><p>Họ Tên Chủ Hộ <p id="color__important">*</p>:</p>  </td>
                        <td><input type="text" name="Hoten" placeholder=" Vd: Nguyễn Văn A"></td>
                        
                    </tr>
                    <tr>
                        <td class="info__inline"><p>Số Tờ <p id="color__important">*</p>:</p> </td>
                        <td><input type="text" name="SoTo" placeholder=" Vd:23"></td>
                        
                    </tr>
                    <tr>
                        <td class="info__inline"><p>Số Thửa <p id="color__important">*</p>:</p></td>
                        <td><input type="text" name="sothua"placeholder=" Vd:55"></td>
                        
                    </tr>
                    <tr>
                        <td class="info__inline"><p>Phường <p id="color__important">*</p>:</p>  </td>
                        <td>
                            <select name="phuong" style="font-size: 15px;">
                                <option value="Phường Tăng Nhơn Phú A"> Phường Tăng Nhơn Phú A</option>
                                <option value="Phường Tăng Nhơn Phú B"> Phường Tăng Nhơn Phú B</option>
                                <option value="Phường Tăng Phước Long A"> Phường Tăng Phước Long A</option>
                                <option value="Phường Tăng Phước Long B"> Phường Tăng Phước Long B</option>
                                <option value="Phường Phú Hũu"> Phường Phú Hũu</option>
                                <option value="Phường Long Trường"> Phường Long Trường</option>
                                <option value="Phường Linh Chiểu"> Phường Linh Chiểu</option>
                                <option value="Phường Linh Trung"> Phường Linh Trung</option>
                                <option value="Phường Bình Chiểu"> Phường Bình Chiểu</option>
                                <option value="Phường Bình Thọ"> Phường Bình Thọ</option>
                                <option value="Phường Bình Phước">Phường Bình Phước</option>
                                <option value="Phường Cát Lái"> Phường Cát Lái</option>
                                <option value="Phường Hiệp Bình Chánh"> Phường Hiệp Bình Chánh</option> 
                                <option value="Phường Hiệp Phú"> Phường Hiệp Phú</option>
                              
                    
                               </select>
                        </td>
                        
                    </tr>
    
                    <tr>
                        <td class="info__inline"><p>Quận <p id="color__important">*</p>:</p>  </td>
                        <td>
                            <select name="quan" style="font-size: 15px;">
                                <option value=" Quận 1"> Quận 1</option>
                                <option value="Quận 2"> Quận 2</option>
                                <option value="Quận 3"> Quận 3</option>
                                <option value="Quận 4"> Quận 4</option>
                                <option value="Quận 5"> Quận 5</option>
                                <option value="Quận 6"> Quận 6</option>
                                <option value="Quận 7"> Quận 7</option>
                                <option value="Quận 8"> Quận 8</option>
                                <option value="Quận 10"> Quận 10</option>
                                <option value="Quận 11"> Quận 11</option> 
                                <option value="Quận 12"> Quận 12</option>
                                <option value="Quận Bình Chánh"> Quận Bình Chánh</option>
                                <option value="TP Thủ Đức"> TP Thủ Đức</option>
                                <option value="Quận Bình Thạnh"> Quận Bình Thạnh</option>
                               </select>
                        </td>
                    </tr>
                </table>
            </div>
    {{csrf_field()}}
      <button id="button__submit" type="submit">NỘP HỒ SƠ</button>
    
    </form>
       
</body>
</html>