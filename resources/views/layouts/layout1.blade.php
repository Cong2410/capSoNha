<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
   <link rel="stylesheet" href=" https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('css/cssUI1.css') }}">
    
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
                                    <a href="{{ url('/document/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Quản lý hồ sơ</a>
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
         <h1>Trạng thái hồ sơ</h1>
     </div>
     <div class="ho_so_dang_thu_ly">
        <div id="search_ho_so">
            <p>Tìm kiếm trạng thái hồ sơ</p>
        </div>
    </div>
    <div class="edit__form">
        <div class="sumtong1" >
            <div class="sum">
            <form method="get" action="{{route('document.search')}}">
        
                
                   
                    <div class="left">
                <label style="color: red;font-size: 15px; ">Nhập mã hồ sơ mà bạn nhận được từ hệ thống sau khi đăng ký hồ sơ thành công.</label>
                <br><br>
                <input type="text" name="mahoso" placeholder=" Nhập mã hồ sơ...">
                
                   </div>
            <div class="left">
                <label ><strong><h3>Các tình trạng của hồ sơ</h3></strong></label><br>
                <a style="font-size: 19px; padding-left: 30px;"><strong>+ Tình trạng 1: </strong>Hồ sơ đã được nhận. Đang chờ được phân công thụ lý.</a><br>
                <a style="font-size: 19px;padding-left: 30px;"><strong>+ Tình trạng 2: </strong> Hồ sơ đang được chuyên viên thụ lý.</a><br>
                <a style="font-size: 19px;padding-left: 30px;"><strong>+ Tình trạng 3: </strong> Hồ sơ đang được lãnh đạo phòng kiểm tra kết quả.</a><br>
                <a style="font-size: 19px;padding-left: 30px;"><strong>+ Tình trạng 4: </strong> Hồ sơ đã hoàn tất và đang chờ phát hành.</a><br>
                <a style="font-size: 19px;padding-left: 30px;"><strong>+ Tình trạng 5: </strong> Hồ sơ đã được phát hành.</a><br>
               </div>
                 </div>
            <br><br>
                {{csrf_field()}}
                <button id="button__search" type="submit">
                    TRA CỨU  </button> 
            </form>
        <button id="button__refresh" href="/document/searchView"><a href="/document/searchView" style="text-decoration: none">  TÌM HỒ SƠ KHÁC</a></button>
        
        </div>
    </div>


    @isset($documentID)
    <table id="example" class="table table-striped table-bordered" >
        <thead>
            <tr>
                <th>Mã hồ sơ</th>
                <th>Người nộp</th>
                <th>Trạng thái hồ sơ</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$documentID}}</td>
                <td>{{$Name}}</td>
                <td>{{$sttName}}</td>
               
            </tr>
            
        </tbody>
       
    </table>
    @endisset
    
    


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="
https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js
"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>

</body>
</html>