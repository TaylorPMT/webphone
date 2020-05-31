@extends('backend.template')
@section('title','Quản Lý Đơn Đặt Hàng Bị Lỗi')

@section('content')
<div class="row my-5" >
    <div class="col-md-6 text-left">
        <a class="btn btn-sm btn-success"  href="{{ Route('approved') }}"><i class="fas fa-plus"  style="color: white;" > </i>Danh Sách Đơn Hàng Đã Duyệt </a>
        <a class="btn btn-sm btn-danger" href="{{ Route('errordonhang') }}" style="color :white;"  href=""><i class="fas fa-trash-alt"  style="color: white;"> </i>
            Danh Sách Đơn Hàng Bị Lỗi
        </a>
    </div>
</div>
  <h2>Quản Lý Đơn Đặt Hàng Bị Lỗi</h2>
 
  <table id="myTable" class="table table-hover table-striped">
    <thead>
        <tr>

             <th>Mã Đơn Đặt Hàng</th>
             <th>Tên Người Đặt Hàng</th>
             <th>Số Điện Thoại</th>
             <th>Email</th>

             <th>Ngày Đặt Mua</th>
             <th>Tình Trạng</th>
             <th>Tổng Đơn Hàng</th>
             <th>Xem Chi Tiết Đơn</th>

        </tr>

    </thead>
    <tbody>
        @foreach ($list as $row)
            <tr>


                <td>{{ $row->code }}</td>
                <td> {{ $row->deliveryname }}</td>
                <td>{{ $row->deliveryphone }}</td>
                <td>{{ $row->deliveryemail }}</td>
                <td class="text-info">{{ date("d-m-Y", strtotime($row->created_at))}}</td>
                <td>
                 @if ($row->status==1)
                 <a class="btn btn-light" href=""><i class="fas fa-toggle-on">Đang Chờ</i></a>
                 @elseif($row->status==2)

                 <a class="btn btn-sm btn-warning" href="">Đã Duyệt<i class="fas fa-toggle-off"></i></a>
                  @else
                  <a class="btn btn-sm btn-danger" href="">Hủy Đơn<i class="fas fa-toggle-off"></i></a>
                 @endif


                </td>
                <td>{{ number_format($row->total_order) }} VNĐ</td>
                <td><a href="{{ Route('orderdetail',['code'=>$row->code]) }}" class="btn btn-light" ><i class="fas fa-envelope-open-text"></i></a></td>

            </tr>
        @endforeach
    </tbody>
</table>
<div class="row">
    <div class="col text-center">
    <a href="{{ Route('orderUser') }}" class="btn btn-sm btn-warning">Quay Trở Lại</a>
     </div>
</div>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
  } );
  </script>
  @endsection
  

