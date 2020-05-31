@extends('frontend.master')
@section('content')
	<div class="products">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="product_grid">

						<!-- Product -->
						@foreach($pro as $p)
						<div class="product">
							<div class="product_image"><img src="frontend/images/dt/{{$p->img}}" alt=""></div>
							<div class="product_content">
								<div class="product_title"><a href="{{route('sanpham',$p->id)}}">{{$p->name}}</a></div>
								<div class="product_price">{{$p->price}}</div>
							</div>
						</div>
						@endforeach
						
					</div>
						
				</div>
			</div>
		</div>
	</div>
@endsection