@extends('backend.template')
@section('title','Quản Lý Sản Phẩm')
<<<<<<< HEAD

=======
<meta name="csrf-token" content="{{ csrf_token() }}">
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
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
<<<<<<< HEAD
        @foreach($product as $product)
=======
        {{-- @foreach($product as $product)
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
        <tr>
          <td>{{$product->id}}</td>
          <td>{{$product->name}}</td>
          <td><img src="{{asset('/upload/tintuc/'.$product->img)}}" alt="phone"></td>
          <td>{{$product->price}}</td>
          <td>{{$product->pricesale == 0 ? "Không có khuyến mãi":$product->pricesale}}</td>
          <td>{{$product->created_at}}</td>
          <td>
<<<<<<< HEAD
          @php
=======
        @php
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
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
<<<<<<< HEAD
        @endforeach
    </tbody>
  </table>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
  } );
=======
        @endforeach --}}
        
    </tbody>
  </table>
  <script>
    $(document).ready(function(){        
      $.ajax({
        url:"http://127.0.0.1:8000/api/admin/product",
        dataType:"json",
        type:"GET",
        data:"json",
        // success:function(list){
          
        // }
        success: function(list){
          $.each(list,function(k,v){     
            
            $('<tr>').append(
              $('<td>').html(v.id),
              $('<td>').html(v.name),
              $('<td>').html("<img src="+"{{asset("upload/tintuc")}}/"+v.img+">"),
              $('<td>').html(v.price),
              $('<td>').html(v.pricesale),
              $('<td>').html(v.created_at),
              $('<td>').html(v.status == 0 ?"Ẩn":"Hiện"),
              $('<td><button class="btn-delete btn-danger" data-id='+v.id+' data-token="{{ csrf_token() }}" style="width:45%">Xóa</button></td>')
              // $('<a href="#">Sửa</a>').css("margin-right","7px"),  
              // $('<a href="#">Đổi</a>'),  
            ).appendTo('tbody');
          })
        }
      })
    })
  </script>
  
  <script>
        $(document).on("click",".btn-delete",function(){
          var id=$(this).data("id");
          var el=this;
          
          // var token = $(this).data("token");
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
          $.ajax({
            url:'http://127.0.0.1:8000/api/admin/product/'+id,
            
            type:"delete",
            dataType:"JSON",
            contentType: 'application/json',
            data: {
                id: id,
                "_token": "{{ csrf_token() }}"
                 },
            success: function(){
              $(el).closest("tr").remove();
              alert("Xóa Thành Công!!");  
            },
            error: function(){
              alert("Xóa Thất Bại!! Tin Tức Đang Được Hiển Thị");
            }
          });
          
        })
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
  </script>
  @endsection
  

