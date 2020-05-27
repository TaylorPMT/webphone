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
        {{-- @foreach($product as $product)
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
        @endforeach --}}
        
    </tbody>
  </table>

  <script>
    $(document).ready(function(){        
      $.ajax({
        url:"http://localhost:8000/api/product",
        dataType:"json",
        method:"GET",
        data:"json",
        success: function(list){
           // console.log(list);
          $.each(list.data,function(k,v){
          // console.log(v.id);
          // if(v.img == ""){
          // }
          // var img="{{asset("upload/tintuc")}}/"+v.img;
          // console.log(img);           
          // var rootImg="<img src="+img+">";            
          //console.log(rootImg);
                   
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
          var id=$(this).data('id');
          var el=this;
          // var token = $(this).data("token");
          // $.ajaxSetup({
          //   headers: {
          //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          //   }
          // });
          $.ajax({
            url:'http://localhost:8000/api/product/'+id,
            type:'delete',
            dataType:"JSON",
            
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
  </script>
  @endsection
  

