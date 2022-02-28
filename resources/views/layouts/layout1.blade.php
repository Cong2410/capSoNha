<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css
   ">
   <link rel="stylesheet" href=" https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('css/cssUI1.css') }}">
    <title>Giao diện xem trạng thái</title>
</head>
<body>
    <p id="hoso">TRẠNG THÁI HỒ SƠ</p><br><br>
    <div id="nhapthongtin1" >Tra Cứu Trạng Thái Hồ Sơ</div>
<br>
<div class="sumtong1" >
    <div class="sum">
    <form method="get" action="{{route('document.search')}}">

        <div class="left">
        <label >Nhập mã hồ sơ: </label><br>
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
        <button type="submit">
            TRA CỨU  </button> 
    </form>
<label ><a href="/document/searchView" style="text-decoration: none; color: black;">  *Tìm hồ sơ khác</a></label>
</div><br><br><br><br><br><br>


</div>


    <br><br>

    @isset($documentID)
    <table id="example" class="table table-striped table-bordered" style="width:100%">
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