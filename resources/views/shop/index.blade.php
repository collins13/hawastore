@extends('layouts.app')

@section('content')
@if (Session::has('success'))
<div class="row">
	<div class="col-sm-6 col-md-4 col-md-offset-6 col-sm-offset-3">
		<div id="charge-message" class="alert alert-success">
			{{Session::get('success')}}
		</div>
	</div>
</div>
@endif
{{-- new items template --}}
<style>
	.card{
		margin-bottom: 2rem;
	}
</style>
<div class="tab-pane  active" id="blockView">
	<div class="row">
		<div class="col-md-3 ml-auto mr-auto">
			<div class="card" style="width: 17rem; height:21rem;">
				<a href="product_details.html"><img src="/images/maxresdefault.jpg" style=" height:12rem;" alt="" /></a>
				<div class="card-body">

					<div class="caption">
						<h5>Manicure &amp; Pedicure</h5>
						<p>
							I'm a paragraph. Click here
						</p>
						<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
									class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
									class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
								href="#">&euro;222.00</a>
						</h4>
					</div>
				</div>
			</div>

		</div>
		<div class="col-md-3">
			<div class="card" style="width: 17rem; height:21rem;">
				<a href="product_details.html"><img src="images/rBVaEFcU-n2AJatYAAIwiDPnfyI156.jpg"
						style=" height:12rem;" alt="" /></a>
				<div class="card-body">

					<div class="caption">
						<h5>Manicure &amp; Pedicure</h5>
						<p>
							I'm a paragraph. Click here
						</p>
						<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
									class="icon-zoom-in"></i></a> <a class="btn btn-success" href="#">Add to <i
									class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
								href="#">&euro;222.00</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card" style="width: 17rem; height:21rem;">
				<a href="product_details.html"><img src="images/rBVaEFcU-n2AJatYAAIwiDPnfyI156.jpg"
						style=" height:12rem;" alt="" /></a>
				<div class="card-body">

					<div class="caption">
						<h5>Manicure &amp; Pedicure</h5>
						<p>
							I'm a paragraph. Click here
						</p>
						<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
									class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
									class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
								href="#">&euro;222.00</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3">
			<div class="card" style="width: 17rem; height:21rem;">
				<a href="product_details.html"><img src="images/rBVaEFcU-n2AJatYAAIwiDPnfyI156.jpg"
						style=" height:12rem;" alt="" /></a>
				<div class="card-body">

					<div class="caption">
						<h5>Manicure &amp; Pedicure</h5>
						<p>
							I'm a paragraph. Click here
						</p>
						<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
									class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
									class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
								href="#">&euro;222.00</a>
						</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-3 ml-auto mr-auto">
				<div class="card" style="width: 17rem; height:21rem;">
					<a href="product_details.html"><img src="/images/maxresdefault.jpg" style=" height:12rem;" alt="" /></a>
					<div class="card-body">
	
						<div class="caption">
							<h5>Manicure &amp; Pedicure</h5>
							<p>
								I'm a paragraph. Click here
							</p>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
										class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
										class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
									href="#">&euro;222.00</a>
							</h4>
						</div>
					</div>
				</div>
	
			</div>
			<div class="col-md-3">
				<div class="card" style="width: 17rem; height:21rem;">
					<a href="product_details.html"><img src="images/rBVaEFcU-n2AJatYAAIwiDPnfyI156.jpg"
							style=" height:12rem;" alt="" /></a>
					<div class="card-body">
	
						<div class="caption">
							<h5>Manicure &amp; Pedicure</h5>
							<p>
								I'm a paragraph. Click here
							</p>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
										class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
										class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
									href="#">&euro;222.00</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="width: 17rem; height:21rem;">
					<a href="product_details.html"><img src="images/rBVaEFcU-n2AJatYAAIwiDPnfyI156.jpg"
							style=" height:12rem;" alt="" /></a>
					<div class="card-body">
	
						<div class="caption">
							<h5>Manicure &amp; Pedicure</h5>
							<p>
								I'm a paragraph. Click here
							</p>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
										class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
										class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
									href="#">&euro;222.00</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="card" style="width: 17rem; height:21rem;">
					<a href="product_details.html"><img src="images/rBVaEFcU-n2AJatYAAIwiDPnfyI156.jpg"
							style=" height:12rem;" alt="" /></a>
					<div class="card-body">
	
						<div class="caption">
							<h5>Manicure &amp; Pedicure</h5>
							<p>
								I'm a paragraph. Click here
							</p>
							<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
										class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
										class="icon-shopping-cart"></i></a> <a class="btn btn-primary"
									href="#">&euro;222.00</a>
							</h4>
						</div>
					</div>
				</div>
			</div>
	</div>

	{{-- <ul class="thumbnails">
	<li class="span3">
		<div class="thumbnail">
			<a href="product_details.html"><img src="themes/images/products/3.jpg" alt="" /></a>
			<div class="caption">
				<h5>Manicure &amp; Pedicure</h5>
				<p>
					I'm a paragraph. Click here
				</p>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
							class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
							class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a>
				</h4>
			</div>
		</div>
	</li>
	<li class="span3">
		<div class="thumbnail">
			<a href="product_details.html"><img src="themes/images/products/3.jpg" alt="" /></a>
			<div class="caption">
				<h5>Manicure &amp; Pedicure</h5>
				<p>
					I'm a paragraph. Click here
				</p>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
							class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
							class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a>
				</h4>
			</div>
		</div>
	</li>
	<li class="span3">
		<div class="thumbnail">
			<a href="product_details.html"><img src="themes/images/products/3.jpg" alt="" /></a>
			<div class="caption">
				<h5>Manicure &amp; Pedicure</h5>
				<p>
					I'm a paragraph. Click here
				</p>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
							class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
							class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a>
				</h4>
			</div>
		</div>
	</li>
	<li class="span3">
		<div class="thumbnail">
			<a href="product_details.html"><img src="themes/images/products/3.jpg" alt="" /></a>
			<div class="caption">
				<h5>Manicure &amp; Pedicure</h5>
				<p>
					I'm a paragraph. Click here
				</p>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
							class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
							class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a>
				</h4>
			</div>
		</div>
	</li>
	<li class="span3">
		<div class="thumbnail">
			<a href="product_details.html"><img src="themes/images/products/3.jpg" alt="" /></a>
			<div class="caption">
				<h5>Manicure &amp; Pedicure</h5>
				<p>
					I'm a paragraph. Click here
				</p>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
							class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
							class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a>
				</h4>
			</div>
		</div>
	</li>
	<li class="span3">
		<div class="thumbnail">
			<a href="product_details.html"><img src="themes/images/products/3.jpg" alt="" /></a>
			<div class="caption">
				<h5>Manicure &amp; Pedicure</h5>
				<p>
					I'm a paragraph. Click here
				</p>
				<h4 style="text-align:center"><a class="btn" href="product_details.html"> <i
							class="icon-zoom-in"></i></a> <a class="btn" href="#">Add to <i
							class="icon-shopping-cart"></i></a> <a class="btn btn-primary" href="#">&euro;222.00</a>
				</h4>
			</div>
		</div>
	</li>
</ul> --}}
	<hr class="soft" />
</div>
</div>

{{-- end new template  --}}

<hr>

@if (count($products) > 0)
@foreach ($products as $product)
<div class="col-md-4">
	<div class="card" style="width: 18rem;">
		<img class="card-img-top" src="storage/images/{{$product->image}}" alt="Card image cap" height="200">
		<div class="card-body">
			<h5 class="card-title">{{$product->title}}</h5>
			<p class="card-text">{{$product->description}}</p>
			<p class="mr-20 py-10">Tsh.{{$product->price}}</p>
			<a href="{{route('product.addToCart', ['id' =>$product->id])}}"
				class="btn btn-danger mr-10 py-10 float-right"><i class="fas fa-shopping-cart">add to cart</i></a>
		</div>
	</div>
</div>
@endforeach
@endif
</div>
@endsection