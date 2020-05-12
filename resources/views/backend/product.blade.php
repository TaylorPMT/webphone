@extends('backend.template')
@section('title','Quản Lý Sản Phẩm')

@section('content')

  <h2>Quản Lý Sản Phẩm</h2>
  <span>@includeIf('backend.modules.message')</span>     
  <table class="table table-dark table-striped" id="myTable">
    <thead>
      <tr>
        <th>#</th>
        <th>Tên Sản Phẩm</th>
        <th>Hình Ảnh</th>
        <th>Giá</th>
        <th>Giá Khuyến Mãi</th>
        <th>Người Đăng/Sửa</th>
        <th>Trạng Thái</th>
        <th>Thao Tác</th>
      </tr>
    </thead>
    <tbody>
        @foreach($product as $product)
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td><img src="{{asset('/upload/tintuc/'.$product->img)}}" alt="phone"></td>
          <td>{{$product->price}}</td>
          <td>{{$product->pricesale == 0 ? "Không có khuyến mãi":$product->pricesale}}</td>
          <td>{{$product->created_at}}</td>
          <td>
          @php
              if($product->status !=1)
              {
                echo "<span class='text-danger'>Off</span>";
              }else
              {
                echo "<span class='text-success'>On</span>";
              }
          @endphp

          </td>
          <td>
            <!-- Xóa -->
              <a href="{{Route('getXoa',['id'=>$product->id])}}" style="padding:0 5px">  
                <i class="far fa-trash-alt"></i>
                  <span>Xóa</span>  
              </a>
            <!-- Sữa -->
              <a href="{{Route('getSua',['id'=>$product->id])}}" style="padding:0 5px">
                <i class="fas fa-tools"></i>
                <span>Sữa</span>
              </a>
            <!-- Trạng Thái -->      
              <a href="{{Route('status',['id'=>$product->id])}}" style="padding:0 5px">
                <i class="fas fa-exchange-alt"></i>
              </a>
          </td>
        </tr>
        @endforeach
    </tbody>
  </table>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
  } );
  </script>
  @endsection
  

