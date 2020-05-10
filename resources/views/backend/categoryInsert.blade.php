@extends('backend.template')
@section('title','Thêm Loại Sản Phẩm')
@section('head')
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
@section('content')

<div class="container" style="text-align:center;padding:25px 0px">
    <h3>Thêm loại sản phẩm</h3>
</div>
<div class="row">
    <div class="col text-center">
        <h3 class="text-center text-white pt-5">@includeIf('backend.modules.message') </h3>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('postcategoryInsert') }}" class="form"  method="POST">
             @csrf
                <!-- #Tên Sản Phẩm -->
                
          
                <div class="form-group mx-sm-3 mb-2">
                    <label for="nameProduct" class="sr-only">Nhập Tên</label>
                    <input type="text" name="nameCat" class="form-control" id="name" placeholder="Nhập Tên" data-token="{{ csrf_token() }}">
                </div>
                {{--  -- Trang Thái  --}}
                <div class="form-group mx-sm-3 mb-2 my-5">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="switch1" name="status" data-token="{{ csrf_token() }}">>
                        <label class="custom-control-label" for="switch1">Toggle me</label>
                      </div>
                      <br>
                </div>
               
                <div class="form-group mx-sm-3 mb-2 text-center">
                    <button class="btn btn-success btn-submit" type="submit" >Submit</button>
            
                </div>
                
                

              
            </form>
        </div>
    </div>
    
</div>

@endsection

