@extends('backend.template')
@section('title','Quản Lý Sản Phẩm')

@section('content')

  <h2>Quản Lý Sản Phẩm</h2>
         
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
      </tr>
    </thead>
    <tbody>
      @foreach($product as $product)
      <tr>
        <td>{{$product->id}}</td>
        <td>{{$product->name}}</td>
        <td>john@example.com</td>
        <td>{{$product->price}}</td>
        <td>{{$product->pricesale == 0 ? "Không có khuyến mãi":$product->pricesale}}</td>
        <td>{{$product->created_at}}</td>
        <td>{{$product->status=1?"On":"Off"}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  @endsection

