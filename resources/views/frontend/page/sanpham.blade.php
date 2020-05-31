@extends('frontend.master')
@section('content')
<div class="product_details">
		<div class="container">
			<div class="row details_row">

				<!-- Product Image -->
				<div class="col-lg-6">
					<div class="details_image">
						<div class="details_image_large"><img src="frontend/images/dt/{{$pro->img}}" alt="">
							
							<div class="product_extra product_new">
						
							<a href="categories.html">New</a></div></div>
						
						
					</div>
				</div>

				<!-- Product Content -->
				<div class="col-lg-6">
					<div class="details_content">
						<div class="details_name" style="font-size: 50px">{{$pro->name}}</div>
						<div class="details_price" style="font-size: 30px;color: green">{{$pro->price}} VNĐ</div>
						

						<!-- In Stock -->
						<div class="in_stock_container">
							
							<div class="details_text">
							<p>{{$pro->detail}}</p>
						</div>
							
							
						</div>
						

						<!-- Product Quantity -->
						<form action="{{URL::to('/save-cart')}}" method="post">
							{{csrf_field()}}
						<div class="product_quantity_container">
							<div class="product_quantity clearfix">
								<span>SL</span>
								<input name="qty" type="number" pattern="[0-9]*" value="1">
								<input type="hidden" name="productid_hidden" value="{{$pro->id}}">
							</div>
							<button class="btn btn-secondary" type="submit">Thêm vào giỏ hàng</button> 
						</div>
					</form>

						<!-- Share -->
						<div class="details_share">
							<span>Chia sẻ:</span>
							<ul>
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			
		</div>
	</div>

@endsection