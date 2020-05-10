@extends('backend.template')
@section('title','Thêm Sản Phẩm')

@section('content')
<div class="container" style="text-align:center;padding:25px 0px">
    <h3>Thêm sản phẩm</h3>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form class="form">
                <!-- #Tên Sản Phẩm -->
                
                <div class="form-group mb-2">
                    <label for="name" class="sr-only">Tên Sản Phẩm</label>
                    <input type="text" readonly class="form-control-plaintext" id="name" value="Tên Sản Phẩm">
                </div>
                <div class="form-group mx-sm-3 mb-2">
                    <label for="nameProduct" class="sr-only">Nhập Tên</label>
                    <input type="text" class="form-control" id="nameProduct" placeholder="Nhập Tên">
                </div>
                
                <!-- Hình Ảnh -->
                <div class="custom-file mb-3">
                    <span>Hình Ảnh:</span>
                    <input type="file" id="myFile" name="filename2" style="margin-left:50px;margin-top:20px">
                </div>
                <!-- Giá Tiền -->
                <div class="form-group mb-2">
                    <label for="price" class="sr-only">Giá Tiền</label>
                    <input type="text" readonly class="form-control-plaintext" id="text " value="Giá Tiền">
                </div>
                <div class="form-group mx-sm-3 mb-2" style="margin-left:50px;margin-top:20px">
                    <label for="priceProduct" class="sr-only">Nhập Giá</label>
                    <input type="number" class="form-control" id="priceProduct" placeholder="Nhập Giá" style="width:100%;">
                </div><br>
                <!-- Giá Khuyến Mãi -->
                <div class="form mb-2">
                    <label for="pricesale" class="sr-only">Giá KM</label>
                    <input type="text" readonly class="form-control-plaintext" id="text " value="Giá Khuyến Mãi">
                </div>
                <div class="form mx-sm-3 mb-2" style="margin-left:50px;margin-top:20px">
                    <label for="pricesaleProduct" class="sr-only">Nhập Giá KM</label>
                    <input type="number" class="form-control" id="pricesaleProduct" placeholder="Nhập Giá KM">
                </div>

                <p>Chi Tiết Sản Phẩm</p>
                <textarea name="detail" id="detail" cols="30" rows="10" class="detail">
                    
                </textarea>
                <script type="text/javascript">
                         CKEDITOR.replace('detail');
                </script>
            </form>
        </div>
    </div>
    
</div>

@endsection

