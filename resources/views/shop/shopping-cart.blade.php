@extends('layouts.app')

@section('content')
@if (Session::has('cart'))
<div class="row">
  <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 ml-auto mr-auto">

    <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">

      <ul class="list-group">
        @foreach ($products as $product)
        <li class="list-group-item">
          <span class="badge">{{$product['qty']}}</span>
          <strong>{{$product['item']['title']}}</strong>
          <span class="label label-success">{{$product['price']}}</span>
          <div class="btn-group">
            <button class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
              Action <span class="caret"></span>
              <ul class="dropdown-menu">
                <li><a href="#">by 1</a></li>
                <li><a href="#">by All</a></li>
              </ul>
            </button>
          </div>
        </li>
        @endforeach
      </ul>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 ml-auto mr-auto"></div>

  </div>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
      <strong>Total:{{$totalPrice}}</strong>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 ml-auto mr-auto">
      <a href="{{route('shop.checkout')}}" type="button" class="btn btn-success" name="button">Checkout</a>
    </div>
    <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
      <button type="button" class="btn btn-success" name="button">Checkout</button>
    </div>
  </div>
  @else
  <div class="row">
    <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3">
      <h1>No item found</h1>
    </div>
  </div>
  @endif

  @endsection