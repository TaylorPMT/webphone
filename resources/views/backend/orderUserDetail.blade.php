@extends('backend.template')
@section('title','Quản Lý Chi Tiết Đơn Đặt Hàng')

@section('content')
<div class="row my-5" >
    <div class="col-md-6 text-left">
        <a class="btn btn-sm btn-success"  href="{{ Route('approved') }}"><i class="fas fa-plus"  style="color: white;" > </i>Danh Sách Đơn Hàng Đã Duyệt </a>
        <a class="btn btn-sm btn-danger" href="{{ Route('errordonhang') }}" style="color :white;"  href=""><i class="fas fa-trash-alt"  style="color: white;"> </i>
            Danh Sách Đơn Hàng Bị Lỗi
        </a>
    </div>
</div>
  <h2>Quản Lý Chi Tiết Đơn Đặt Hàng</h2>
 
    <table id="myTable" class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th></th>
                                 <th>Tên Sản Phẩm</th>
                                 <th>Giá tiền</th>
                                 <th>Số lượng</th>
                                 <th>Thành tiền</th>

                                 <th>Ngày Đặt Mua</th>



                            </tr>

                        </thead>
                        <tbody>
                            @foreach ($list as $row)
                                <tr>

                                    <td> <span class="text-center" style="margin:auto">
                                        <a href="{{ Route('status',['code'=>$row->orderid]) }}" class="btn btn-sm btn-success" style="color:white;">Duyệt Đơn Hàng</a>
                                        <a   href="{{ Route('orderdetail-error',['code'=>$row->orderid]) }}" class="btn btn-sm btn-danger" style="color:white;">Hủy Đơn ( Đơn Bị Lỗi )</a>
                                         </span></td>
                                    <td> {{ $row->nameproduct}}</td>
                                    <td> {{ $row->price }}</td>
                                    <td>{{ $row->quantity }}</td>
                                    <td>{{ $row->amount }}</td>
                                    <td class="text-info">{{ date("d-m-Y", strtotime($row->created_at))}}</td>



                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col text-center">
                        <a href="{{ Route('orderUser') }}" class="btn btn-sm btn-warning">Quay Trở Lại</a>
                         </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            
                               
                            
                        </div>
                    </div>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
  } );
  </script>
  @endsection
  

