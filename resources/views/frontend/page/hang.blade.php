@extends('frontend.master')
@section('content')
	<!-- Products -->

	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<!-- Product Sorting -->
					<div class="sorting_bar d-flex flex-md-row flex-column align-items-md-center justify-content-md-start">
						<div class="results">Có <span>{{count($pro)}}</span> kết quả</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						@foreach($pro as $sp)
							<div class="product"><a href="{{route('sanpham',$sp->id)}}">
								<div class="product_image"><img src="frontend/images/dt/{{$sp->img}}" alt=""></div>
								
								
								<div class="product_content">
									<div class="product_title"><a href="{{route('sanpham',$sp->id)}}">{{$sp->name}}</a></div>
									<div class="product_price">{{$sp->price}}</div>
								</div></a>
							</div>
						@endforeach


					</div>
					<div class="product_pagination">
						
					</div>
						
				</div>
			</div>
		</div>
	</div>

@endsection