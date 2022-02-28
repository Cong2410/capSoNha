
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
        <br>
  
<label style="text-align: center; font-size:20px; color:red">Mã hồ sơ của bạn là: </label>
<input   type="text" name="mahoso" value="{{$mahoso}}"  placeholder=" Mã hồ sơ..." disabled>

</body>
</html>