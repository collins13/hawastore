@extends('layouts.app')

@section('content')

<!-- SECTION -->
<div class="section">
  <!-- container -->
  <div class="container">
    <!-- row -->
    <div class="row">

      <div class="col-md-7">
        <!-- Billing Details -->
        <div class="billing-details">
          <div class="section-title">
            <h3 class="title">Checkout</h3>
          </div>
          <div id="charge-error" class="alert elert-danger" {{!Session::has('error'?'hidden':'')}}>
            {{Session::get('error')}}</div>
          <form class="" action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="name" value="" placeholder="Name" required>
            </div>
            <div class="form-group">
              <label for="address">Address:</label>
              <input type="text" class="form-control" id="adress" value="" placeholder="address" required>
            </div>
            <div class="form-group">
              <label for="card-holder-name">Card Holder Name:</label>
              <input type="text" class="form-control" id="card-name" value="" placeholder="card holder name" required>
            </div>
            <div class="form-group">
              <label for="credit-card-number">Credit Card Number:</label>
              <input type="text" class="form-control" id="card-number" value="" placeholder="credit card" required>
            </div>

            <div class="row">
              <div class="form-group col-md-6">
                <label for="card-exiry-month">Expiration Month:</label>
                <input type="text" class="form-control" id="card-expiry-month" value="" placeholder="card expiry month"
                  required>
              </div>
              <div class="form-group col-md-6">
                <label for="card-exiry-year">Expiration Year:</label>
                <input type="text" class="form-control" id="card-expiry-year" value="" placeholder="card expiry year"
                  required>
              </div>
            </div>
            <div class="form-group">
              <label for="cvc">CVC:</label>
              <input type="text" class="form-control" value="" id="card-cvc" placeholder="cvc" required>
            </div>
            @csrf
            <button class="primary-btn order-submit">Place order</button>
          </form>
        </div>
        <!-- /Shiping Details -->
      </div>

      <!-- Order Details -->
      <div class="col-md-5 order-details">
        <div class="section-title text-center">
          <h3 class="title">Your Order</h3>
        </div>
        <div class="order-summary">

          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">PRODUCT</th>
                <th scope="col">QUANTITY</th>
                <th scope="col">PRICE</th>
                <th scope="col">TOTAL</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($products as $product)
              <tr>
                <th scope="row">1</th>
                <td>
                  <div>{{$product['item']['title']}}</div>
                </td>
                <td>{{$product['qty']}}</td>
                <td>Tsh.{{$product['price']}}</td>
                <td>
                  <div class="ui labeled button mr-auto" tabindex="0">
                    <div class="ui primary button">
                      <i class="money bill alternate outline icon"></i> Total
                    </div>
                    <a class="ui basic green left pointing label">
                      Tsh.{{$product['price']}}
                    </a>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>

          <div class="order-col">
            <div>Shiping</div>
            <div><strong>FREE</strong></div>
          </div>
          <div class="order-col">
            <div><strong>GRAND TOTAL</strong></div>
            <hr>
          </div>
          <div class="ui labeled button mr-auto" tabindex="0">
            <div class="ui primary button">
              <i class="money bill alternate outline icon"></i> Total
            </div>
            <a class="ui basic green left pointing label">
              Tsh.{{$total}}
            </a>
          </div>
        </div>
        <hr>
        <h3><u>Payment options</u></h3>
        <div class="payment-method row">

          <div class="input-radio col-md-4">
            <label for="payment-1">
              <span></span>
              <a href="#" class="btn btn-success">M-pesa</a>
            </label>
            <div class="caption">
              <hr>
            </div>
          </div>
          <div class="input-radio col-md-4">
            <label for="payment-2">
              <a href="#" class="btn btn-success"><i class="fa fa-paypal fa-2x"></i> PayPal</a>
            </label>
            <div class="caption">
              <hr>
            </div>
          </div>
          <div class="input-radio col-md-4">
            <label for="payment-3">
              <a href="#" class="btn btn-primary"><i class="fa fa-cc-stripe fa-2x"></i></a>
            </label>
            <div class="caption">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /Order Details -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /SECTION -->


@endsection
@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="{{asset("js/checkout.js")}}"></script>


@endsection