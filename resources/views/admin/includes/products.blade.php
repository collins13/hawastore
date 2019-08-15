@extends('layouts.admin')




@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Products</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
        </div>
        <hr>
        <div class="container">
   
        <form action="{{route('products')}}" method="POST"  enctype="multipart/form-data">
         {{ csrf_field() }}
            <div class="row">
                    <div class="form-group col-md-6">
                            <label for="title">Title</label>
                            <input type="text" class="form-control"  name="title" id="productTitle" aria-describedby="productType" placeholder="Enter product type">
                            <small id="productTitle" class="form-text text-muted">add the product title here</small>
                          </div>
                          <div class="form-group col-md-6">
                            <label for="image">Image</label>
                            <input type="file" class="form-control" name="image" id="productImage" placeholder="productImage">
                          </div>

                          <div class="form-group col-md-6">
                                <label for="category">Category</label>
                            <select id="inputState" class="form-control" name="category">
                                <option selected>Choose</option>
                                <option>Dress</option>
                                <option>Suits</option>
                            </select>
                          </div>
                              <div class="form-group col-md-6">
                                <label for="price">Price</label>
                                <input type="number" class="form-control" name="price" id="productPrice" placeholder="productPrice">
                              </div>
                              
            </div>
            <div class="form-group">
                    <label for="description">Product Description</label>
                    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
                    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
                    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
                    <script>
                        $('textarea').ckeditor();
                        // $('.textarea').ckeditor(); // if class is prefered.
                    </script>

                  </div>
                    <button type="submit" class="btn btn-primary">AddProduct</button>
                <a href="/admin" class="btn btn-warning">Go Back</a>

          </form>
     
        </div>
    
        
@endsection