@extends('layouts.app')

@section('content')

  <div class="row">
    <div class="col-md-8 col-sm-8">
      @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
      <h1 class="text-center">User profile</h1>
    </div>
  </div>
@endsection
