@extends('backend.template')
@section('title','Thêm Sản Phẩm')

@section('content')
<div class="container" style="text-align:center;padding:25px 0px">
    <h3>Thêm sản phẩm</h3>
    <span>@includeIf('backend.modules.message')</span>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form" method="POST" action="{{Route('postthem')}}" enctype="multipart/form-data"> 
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
                    @foreach($id as $id)
                        <option selected value="{{$id->id}}">{{$id->name}}</option>
                    @endforeach
                    </select>
                    
                </div>
                <!-- Hình Ảnh -->
                <div class="custom-file mb-3">
                    <span>Hình Ảnh:</span>
                    <input type="file" id="myFile" name="file" style="margin-left:50px;margin-top:20px">
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

@endsection

