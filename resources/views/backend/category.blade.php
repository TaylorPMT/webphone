@extends('backend.template')
@section('title','Quản Lý Sản Phẩm')

@section('content')

  <h2>Quản Lý Sản Phẩm</h2>
         
  <table class="table table-dark table-striped" id="myTable">
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
           
                 <a id="update__loai" href="{{ Route('update_category',['id_loai'=>$item->id]) }}"><i class="fas fa-toggle-off text-danger">Off</i>  </a>
              
        </td>

      </tr>
        @endforeach
     
    </tbody>
  </table>

  <div class="container">
   
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
    
          
           <div class="row">
             <div class="col text-center">
              <div class="spinner-grow text-primary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-secondary" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-success" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-danger" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-warning" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-info" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-light" role="status">
                <span class="sr-only">Loading...</span>
              </div>
              <div class="spinner-grow text-dark" role="status">
                <span class="sr-only">Loading...</span>
              </div>
  
             </div>
           </div>
       
        
      </div>
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
              if(response ==1)
              {
            setTimeout(function(){
              $('#myModal').modal('show');
             },1000) // 3 seconds.
        
          
            setInterval('window.location.reload()', 2000);
             }else
             {
               alert ("Lỗi phát sinh");
             }
          
          });
    });
  </script>
  @endsection


