@extends('backend.template')
@section('title','Quản Lý Sản Phẩm')
@section('head')
    <link rel="stylesheet" href="{{ asset('backend/css/page.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

  <h2>Quản Lý Sản Phẩm</h2>
 
  <div class="row">
      <div class="col">
        <div class="form__search">
          <form>
            @csrf
         <input class="input_search" type="text" size="30" onkeyup="showResult(this.value)" placeholder="Search ....">
          <div id="livesearch"></div>
          </form>
        </div>
      </div>
  </div>
  <table class="table table-dark table-striped my-2">
          <div class="box__insert">
              <a href="#" class="btn btn-sm btn-category" data-toggle="modal" data-target="#exampleModalCenter">Thêm Loại</a>
          </div>
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Tên Loại</th>
        <th scope="col">Ngày Tạo</th>
        <th scope="col">Tên Người Tạo</th>
        <th scope="col">Trạng Thái</th>
      </tr>
    </thead>
    <tbody  id="tbodyTable">
     
      {{--  @foreach ($list_cat as $item)
      <tr>
        <th scope="row">1</th>
        <td>{{ $item->name }}</td>
        <td>{{ $item->created_at }}</td>
        <td>{{ $item->ten }}</td>
        <td>  
           
                 <a id="update__loai" href="{{ Route('update_category',['id_loai'=>$item->id]) }}"><i class="fas fa-toggle-off text-danger">Off</i>  Tắt</a>
              
        </td>

      </tr>
        @endforeach  --}}
     
     
    </tbody>
  </table>
    @includeIf('backend.modules.modalInsertCategory')
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
      $('.btn-category').click(function(e){
          e.prevenDefault;
       });
  </script>
  <script>
      $('.btn-submit').click(function(e){
          e.preventDefault;
          var data=$('#insertCategory').serialize();
          console.log(data);
       
          var url='http://127.0.0.1:8000/api/admin/category/';
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
            $.ajax({
              
          

            });
      });
  </script>
  {{--  //load ajax api category  --}}
  <script src="{{ asset('backend/js/ajax/loadCategoryApi.js') }}">
  </script>
    {{--  //load ajax api category  --}}
    {{--  //search Category  --}}
  <script src="{{ asset('backend/js/ajax/searchCategoryApi.js') }}">
  </script>
  {{--  end search category  --}}

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
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
  } );
  </script>
  @endsection


