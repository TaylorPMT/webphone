@extends('backend.template')
@section('title','Thêm Sản Phẩm')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('content')
{{-- <script>
    $('.textarea_editor').wysihtml5();
  </script> --}}

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

<div class="container" style="text-align:center;padding:25px 0px">
    <h3>Thêm sản phẩm</h3>
  
    <span>@includeIf('backend.modules.message')</span>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                    @foreach($id as $id)
                        <option selected value="{{$id->id}}">{{$id->name}}</option>
                    @endforeach
                    </select>
                    
                </div>
                <!-- Hình Ảnh -->
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
                 
                 

                <button type="submit" class="btn btn-primary"style="margin-top:20px">Thêm</button>
            </form>
            {{-- <form id="frm-insert" method="POST">
                <label for="name">ten sp</label>
                <input type="text" id="name" name="name" placeholder="nhap ten">
                <button type="submit" id="btn-sub" class="btn btn-primary" >Send</button>
            </form> --}}
        </div>
    </div>
</div>
<script type="text/javascript">
    CKEDITOR.replace('editor');
</script>
<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn").click(function(e){
        e.preventDefault();
        for ( instance in CKEDITOR.instances ) {
        CKEDITOR.instances[instance].updateElement();
        };
        $.ajax({
            url:'localhost:8000/api/product/',
            type:'POST',
            dataType:'JSON',
            // contentType:'application/x-www-form-urlencoded',
            data:$("#data").serialize(),
            
            // {
            //     "name":$('input[name=nameProduct]').val(),
            //     "catid":$('select[name=category]').val(),
            //     "images":$('input[name=img]').val(),
            //     "price":$('input[name=priceProduct]').val(),
            //     "pricesale":$('input[name=pricesaleProduct]').val(),
            //     "detail":$('textarea[name=detail]').val(),
            // },
            
            success: function(data) {
                console.log(data);
            }
        });
    });
</script>

@endsection

