<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
    <title>Document</title>
</head>
<body>
    <header>
       <a id="text_logo"> CẤP SỐ NHÀ TP.HCM </a>
       <nav> 
           <ul class="nav_bar">
               <li><a  href="">Bản đồ quy hoạch</a> </li>
               <li><a  href="">Tra cứu hồ sơ</a></li>
               <li><a  href="">Quản lý hồ sơ</a></li>

           </ul>
       </nav>
    </header>
    <div class="title_dashboard">
        <h1>Danh sách hồ sơ</h1>
    </div>
    <div class="ho_so_dang_thu_ly">
        <div class="title_dang_thu_ly">
            <p>Hồ sơ đang thụ lý</p>
        </div>
        </div>
    

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Mã hồ sơ</th>
                <th>Họ và tên</th>
                <th>Phường/Xã</th>
                <th>Số tờ</th>
                <th>Số thửa</th>
                
                <th>Thụ Lý</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($HoSos as $documents)
            <tr>
                <td>{{$documents->id}}</td>
                <td>{{$documents->name}}</td>
                <td>{{$documents->ward}}</td>
                <td>{{$documents->sheet}}</td>
                <td>{{$documents->pol}}</td>
                <td>
                  <form action="/documents/{{$documents->id}}/edit" method="get">
                    @csrf
                    @role('expert')
                    <button  class="btn btn-danger" type="submit">Thụ lý</button>
                    @endrole
                    @role('head-of-department')
                    <button  class="btn btn-danger" type="submit">Duyệt</button>
                    @endrole
                  </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <th>Mã hồ sơ</th>
                <th>Họ và tên</th>
                <th>Phường/Xã</th>
                <th>Số tờ</th>
                <th>Số thửa</th>
                <th>Thụ lý</th>
            </tr>
        </tfoot>
    </table>


    <script  src="//code.jquery.com/jquery-3.5.1.js"></script>
    <script src="//cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/dashboard.js"></script>
    
</body>
</html>