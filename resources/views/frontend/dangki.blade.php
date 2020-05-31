<!DOCTYPE html>
<html lang="en">
<head>
<title>Đăng kí</title>
<base href="{{asset('')}}">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Sublime project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="frontend/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="frontend/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="frontend/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="frontend/styles/categories.css">
<link rel="stylesheet" type="text/css" href="frontend/styles/categories_responsive.css">
</head>
<body>

<div class="super_container">
	@includeIf('backend.modules.message')
	<!-- Header -->
<div class="re-home"><a href="{{Route('trangchu')}}">Home</a></div>
	 <h2>Đăng kí</h2>
	
            <div class="dangki">
            	<form method="POST" action="{{Route('postDangki')}}" >
            	  @csrf
            	  <div class=alert-err>
			       		@if(count($errors)>0)
			       		<div>
			       			@foreach($errors->all() as $err)
			       			<label>
			       				{{$err}}
			       			</label>
			       			@endforeach
			       		</div>
			       		@endif
			       </div>
            		 <label >Tên đăng nhập</label>
	                <input type="text" name="username">
	                <label >Tên đầy đủ</label>
	                <input type="text" name="fullname">
	                <label>Mật khẩu</label>
	                <input type="text" name="pass1">
	                <label>Nhập lại mật khẩu</label>
	       			<input type="text" name="pass2">
	                <label >Số điện thoại</label>
	                <input type="text" name="sdt">    
	                <label >Email</label>
	                <input type="text" name="email"> 
	                <input id="submit" type="submit" name="submit" value="Gửi">
            	</form>
               
            </div>                
       

	

	<!-- Products -->




	<!-- Footer -->
	
	<div class="footer_overlay"></div>
	<footer class="footer">
		<div class="footer_background" style="background-image:url(frontend/images/footer.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="footer_content d-flex flex-lg-row flex-column align-items-center justify-content-lg-start justify-content-center">
						
						<div class="copyright ml-auto mr-auto"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="footer_social ml-lg-auto">
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="frontend/js/jquery-3.2.1.min.js"></script>
<script src="frontend/styles/bootstrap4/popper.js"></script>
<script src="frontend/styles/bootstrap4/bootstrap.min.js"></script>
<script src="frontend/plugins/greensock/TweenMax.min.js"></script>
<script src="frontend/plugins/greensock/TimelineMax.min.js"></script>
<script src="frontend/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="frontend/plugins/greensock/animation.gsap.min.js"></script>
<script src="frontend/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="frontend/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="frontend/plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="frontend/plugins/easing/easing.js"></script>
<script src="frontend/plugins/parallax-js-master/parallax.min.js"></script>
<script src="frontend/js/categories.js"></script>
</body>
</html>