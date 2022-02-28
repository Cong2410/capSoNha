
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/cssUI.css') }}" > 

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link     rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />
    <title>Giao Diện Nộp Hồ Sơ</title>
</head>
<body>
        <p id="hoso" class="animate__animated animate__tada animate__infinite ">NỘP HỒ SƠ </p><br>
        <div id="nhapthongtin">Nhập Thông Tin</div>
        {{-- <form method="get" action="{{url('/documents')}}"> --}}
        <form method="post" action="{{route('document.store')}}">
        <div class="sum">
            
            <div class="left">
                <label> Họ Tên Chủ Hộ *: </label>
            </div>
            
           <div class="right">
            <input type="text" name="Hoten" placeholder=" Vd: Nguyễn Văn A">
           </div>
        </div>

        <div class="sum">
            <div class="left">
            <label> Số Tờ *: </label></div>
            <div class="right">
            <input type="text" name="SoTo" placeholder=" Vd:23"></div>
        </div>
        <div class="sum">
            <div class="left">
            <label> Số Thửa *: </label></div>
            <div class="right">
            <input type="text" name="sothua"placeholder=" Vd:55"></div>
        </div>
        <div class="sum">
            <div class="left">
            <label> Phường *: </label></div>
            <div class="right">
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
            </div>
        </div>
        <div class="sum">
            <div class="left">
            <label> Quận *: </label></div>
            <div class="right">
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
        </div>
        </div>


<br><br>
{{csrf_field()}}
  <button type="submit">NỘP HỒ SƠ</button>

</form>
</body>
</html>