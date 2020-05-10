@extends('backend.template')
@section('title')
    Quản Lý Loại
@endsection
@section('content')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <div class="row my-3" >
      <div class="col text-center">
          <h3>Quản Lý Loại Sản Phẩm</h3>
      </div>
    </div>
<div class="row">
      <div class="col">
        <table class="table table-dark my-3">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Loại</th>
                <th scope="col">Ngày Tạo</th>
                <th scope="col">Tên Người Tạo</th>
                <th scope="col">Trạng Thái</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($list_cat as $item)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>
                    <td>{{ $item->ten }}</td>
                    <td>  
                       
                             <a id="update__loai" href="{{ Route('update_category',['id_loai'=>$item->id]) }}"><i class="fas fa-toggle-on"></i></a>
                          
                    </td>

                  </tr>
                @endforeach
            
              
            </tbody>
          </table>
    </div>
</div>
<script>

  $('#update__loai').click(function(event)
  {
    event.preventDefault();
    var url = $(this).attr('href');
    
          $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
        })
        .done(function(response) {
          
          console.log(response);
        });
  });
</script>

@endsection