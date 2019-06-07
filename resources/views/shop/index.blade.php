@extends('layouts.app')

@section('content')

  <div class="row">
    @if (count($products) > 0)
  @foreach ($products as $product)
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="storage/images/{{$product->image}}" alt="Card image cap" height="200">
          <div class="card-body">
            <h5 class="card-title">{{$product->title}}</h5>
            <p class="card-text">{{$product->description}}</p>
            <p class="mr-20 py-10">Tsh.{{$product->price}}</p>
            <a href="{{route('product.addToCart', ['id' =>$product->id])}}" class="btn btn-danger mr-10 py-10 float-right"><i class="fas fa-shopping-cart">add to cart</i></a>
          </div>
     </div>
    </div>
    @endforeach
    @endif
  </div>
@endsection
