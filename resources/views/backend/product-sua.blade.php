@extends('backend.template')
@section('title','Thêm Sản Phẩm')

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
    <span>@includeIf('backend.modules.message')</span>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="POST" action="{{Route('postSua',['id'=>$id->id])}}" enctype="multipart/form-data"> 
                @csrf
                <!-- #Tên Sản Phẩm -->
                
                <div class="form-group mb-2">
                    <label for="name" class="sr-only">Tên Sản Phẩm</label>
                    <!-- <input type="text" readonly class="form-control-plaintext" id="name" value="Tên Sản Phẩm"> -->
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="nameProduct" class="sr-only">Nhập Tên</label>
                    <input type="text" class="form-control" id="nameProduct" value="{{$id->name}}" name="nameProduct" placeholder="Nhập Tên">
                </div>
                <!-- Loại -->
                <div class="input-group mb-3" style="margin-top:15px">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Loại</label>
                    </div>
                    
                    <select class="custom-select" id="inputGroupSelect01" name="category">
                    @foreach($cate as $id)
                        <option selected value="{{$id->id}}">{{$id->name}}</option>
                    @endforeach
                    </select>
                    
                </div>
                <!-- Hình Ảnh -->
                <div class="custom-file mb-3">
                    <span>Hình Ảnh:</span>
<<<<<<< HEAD
                    <input type="file" id="myFile" name="file" style="margin-left:50px;margin-top:20px" onchange="return fileValidation()">
=======
                    <input 
                        type="file" 
                        id="myFile" 
                        name="file" 
                        style="margin-left:50px;margin-top:20px" 
                        onchange="return fileValidation()"
                    >
>>>>>>> a374cc3b592256c10dd67c86b205180b6a28a17a
                    <div id="imagePreview" style="display:flex;"></div>
                </div>
                <!-- Giá Tiền -->
                
                <div class="form-group mb-2" style="margin-top:20px">
                    <label for="priceProduct">Nhập Giá</label>
                    <input value="{{$pricetxt}}" type="number" name="priceProduct" class="form-control" id="priceProduct" style="width:100%;" >
                </div>
                <!-- Giá Khuyến Mãi -->
                <div class="form-group mb-2" style="margin-top:20px">
                    <label for="pricesaleProduct">Nhập Giá KM</label>
                    <input value="{{$pricesaletxt}}" type="number" name="pricesaleProduct" class="form-control" id="pricesaleProduct" style="width:100%;" >
                </div>

                <p>Chi Tiết Sản Phẩm</p>
                <textarea name="detail" id="detail" cols="30" rows="10" class="detail">
                {{$detail}}
                    
                </textarea>
                <script type="text/javascript">
                         CKEDITOR.replace('detail');
                </script>

                <button type="submit" class="btn btn-primary">Sữa</button>
            </form>
        </div>
    </div>
    
</div>

@endsection

