@extends('backend.template')
@section('title','Thêm Sản Phẩm')
<<<<<<< HEAD

@section('content')

<script>
function fileValidation(){
    var fileInput = document.getElementById('myFile');
    var filePath = fileInput.value;//lấy giá trị input theo id
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;//các tập tin cho phép
    //Kiểm tra định dạng
    if(!allowedExtensions.exec(filePath))
    {
    alert('Vui lòng upload các file có định dạng: .jpeg/.jpg/.png/.gif only.');
    fileInput.value = '';
    return false;
    }
    else
    {
    //Image preview
    if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
    document.getElementById('imagePreview').innerHTML = '<img style="width:300px;height:300px" src="'+e.target.result+'"/>';
    };
    reader.readAsDataURL(fileInput.files[0]);
    }
    }
    }
</script>
<div class="container" style="text-align:center;padding:25px 0px">
    <h3>Thêm sản phẩm</h3>
=======
<meta name="csrf-token" content="{{ csrf_token() }}">
<?php
    header('Access-Control-Allow-Origin: *');
?>
@section('content')
{{-- <script>
    $('.textarea_editor').wysihtml5();
  </script> --}}



<div class="container" style="text-align:center;padding:25px 0px">
    <h3>Thêm sản phẩm</h3>
  
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
    <span>@includeIf('backend.modules.message')</span>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
<<<<<<< HEAD
            <form class="form" method="POST" action="{{Route('postThem')}}" enctype="multipart/form-data"> 
                @csrf
                <!-- #Tên Sản Phẩm -->
                
                <div class="form-group mb-2">
                    <label for="name" class="sr-only">Tên Sản Phẩm</label>
                    <!-- <input type="text" readonly class="form-control-plaintext" id="name" value="Tên Sản Phẩm"> -->
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="nameProduct" class="sr-only">Nhập Tên</label>
                    <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Nhập Tên">
                </div>
                <!-- Loại -->
                <div class="input-group mb-3" style="margin-top:15px">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Loại</label>
                    </div>
                    
                    <select class="custom-select" id="inputGroupSelect01" name="category">
=======
            <form class="form-group" id="data" method="POST" enctype="multipart/form-data" > 
                {{-- @csrf --}}
                {{ csrf_field() }}
                <!-- #Tên Sản Phẩm -->
                <div class="form-group">
                    <label for="nameProduct">Nhập Tên</label>
                    <input type="text" class="form-control" id="nameProduct" name="nameProduct" placeholder="Nhập Tên">
                </div>
                <!-- Loại -->
                <div class="form-group" style="margin-top:15px">
                    <label for="category">Chọn Loại</label>
                    <select class="custom-select" id="inputGroupSelect01" name="category" >
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
                    @foreach($id as $id)
                        <option selected value="{{$id->id}}">{{$id->name}}</option>
                    @endforeach
                    </select>
                    
                </div>
                <!-- Hình Ảnh -->
<<<<<<< HEAD
                <div class="custom-file mb-3">
                    <span>Hình Ảnh:</span>
                    <input type="file" id="myFile" name="file" style="margin-left:50px;margin-top:20px" onchange="return fileValidation()">
                    <div id="imagePreview" style="display:flex;"></div>
                </div>
                <!-- Giá Tiền -->
                <div class="form-group mb-2">
                    <label for="price" class="sr-only">Giá Tiền</label>
                    <input type="text" readonly class="form-control-plaintext" id="text " value="Giá Tiền">
                </div>
                <div class="form-group mx-sm-3 mb-2" style="margin-left:50px;margin-top:20px">
                    <label for="priceProduct" class="sr-only">Nhập Giá</label>
                    <input type="number" name="priceProduct" class="form-control" id="priceProduct" placeholder="Nhập Giá" style="width:100%;">
                </div><br>
                <!-- Giá Khuyến Mãi -->
                <div class="form mb-2">
                    <label for="pricesale" class="sr-only">Giá KM</label>
                    <input type="text" readonly class="form-control-plaintext" id="text " value="Giá Khuyến Mãi">
                </div>
                <div class="form mx-sm-3 mb-2" style="margin-left:50px;margin-top:20px">
                    <label for="pricesaleProduct" class="sr-only">Nhập Giá KM</label>
                    <input type="number" name="pricesaleProduct" class="form-control" id="pricesaleProduct" placeholder="Nhập Giá KM">
                </div>

                <p>Chi Tiết Sản Phẩm</p>
                <textarea name="detail" id="detail" cols="30" rows="10" class="detail">
                    
                </textarea>
                <script type="text/javascript">
                         CKEDITOR.replace('detail');
                </script>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>
    
</div>

=======
                <label class="control-label">Hình đại diện</label>
                 <div class="controls">
                    <input type="file" id="image" name="file" onchange="return fileValidation()" >
                 </div>
                <div  id="imagePreview"></div>
                <!-- Giá Tiền -->
                <div class="form-group" style="margin-top:20px">
                    <label for="priceProduct">Nhập Giá</label>
                    <input type="number" name="priceProduct" class="form-control" id="priceProduct" placeholder="Nhập Giá" style="width:100%;">
                </div><br>
                <!-- Giá Khuyến Mãi -->
                <div class="form-group" style="margin-top:20px">
                    <label for="pricesaleProduct">Nhập Giá KM</label>
                    <input type="number" name="pricesaleProduct"class="form-control" id="pricesaleProduct" placeholder="Nhập Giá KM">
                </div>

                <p style="margin-top:20px">Chi Tiết Sản Phẩm</p>
                <div>    
                    <textarea name="detail" id="editor" cols="30" rows="10"></textarea>
                </div>
                 
                 

                <button type="submit" class="btn btn-primary "style="margin-top:20px">Thêm</button>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="alert"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<script type="text/javascript">
$(document).ready(function(){
    CKEDITOR.replace('editor');
});
    
</script>
<script>
    function fileValidation(){
    var fileInput = document.getElementById('image');
    var filePath = fileInput.value;//lấy giá trị input theo id
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;//các tập tin cho phép
    //Kiểm tra định dạng
    if(!allowedExtensions.exec(filePath)){
    alert('Vui lòng upload các file có định dạng: .jpeg/.jpg/.png/.gif only.');
    fileInput.value = '';
    return false;
    }else{
    //Image preview
    if (fileInput.files && fileInput.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
    document.getElementById('imagePreview').innerHTML = '<img style="width:400px;height:200px;" src="'+e.target.result+'"/>';
    };
    reader.readAsDataURL(fileInput.files[0]);
    }
    }
    }
    </script>
<script src="{{ asset('backend/js/apiProduct/insertProduct.js') }}"></script>
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
@endsection

