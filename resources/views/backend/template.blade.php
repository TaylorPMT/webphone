<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css.map">
    <link rel="stylesheet" href="{{ asset('backend/css/page.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/all.min.css') }}">
    <script src="{{ asset('backend/js/all.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
          @yield('head')    
</head>
<body>
    <header class="box-header">
        <div class="container-fluid">
            <div class="row">
                <div class="box-header__banner">
                    <div class="col-md-12">
                        this is a banner
                    </div>
                </div>
            </div>
        </div>
        <div class="box-main__nav">
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                <ul class="navbar-nav">
                        {{-- 0 --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                      Quản Lý Loại
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ Route('catogory') }}">Danh Sách Loại</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                    <!-- #1  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Sản Phẩm
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                     <!-- #2  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Đơn Hàng
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                     <!-- #3  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Khuyến Mãi
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                     <!-- #3  -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                        Quản Lý Tin Tức
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">Thêm Sản Phẩm</a>
                            <a class="dropdown-item" href="#">Xóa </a>
                            <a class="dropdown-item" href="#">Link 3</a>
                        </div>
                     </li>
                 </ul>
            </nav>
        </div>
    </header>

    <main class="box-main">
         @yield('content')
    </main>

    <footer>
        this is footer
    </footer>




  
    @yield('script')
</body>

</html>