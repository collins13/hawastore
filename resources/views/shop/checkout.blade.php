@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="row">
          <div class="col-sm-6 col-md-6 col-sm-offset-3 col-md-offset-3 ml-auto mr-auto">
          <h1>Checkout</h1>
          <h1>Total:{{$total}}</h1>
          </div>
          <form action="{{'productController@getCheckout'}}" method="POST">
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_33Jxqwto6NFViCt8GTvRIl2V00IFnWzEYb"
    data-amount="2500"
    data-name="Software development E-book"
    data-description="software developement for beginers"
    data-image="/img/marketplace.png"
    data-locale="auto">
  </script>
  <script type="text/javascript">
  document.getElementsByClassName('stripe-button-el')[0].style.display = 'none';
  </script>
  <button type="submit" class="btn btn-outline-danger text-white">buy at Ksh. 2500</button>
</form>
    </div>
    <div class="col-md-6">
      <img src="/img/cover.jpeg" class="img-fluid" style="height:350px; alt="">
    </div>
  </div>
@endsection
