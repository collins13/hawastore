
@extends('layouts.admin')




@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"> Edit  Categories</h1>
        </div>
        <hr>
        <div class="container">
                @include('admin.includes.messages')
            <form action="{{route("category.update", $category->id)}}" method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                @method('PUT')
                           <div class="form-group col-md-8">
                                   <label for="title">Category Name</label>
                           <input type="text" class="form-control"  name="name" id="name" aria-describedby="categoryType" required placeholder="Enter category type" value="{{$category->name}}">
                                 </div>
                           <button type="submit" class="btn btn-primary">EditCategory</button>
                                <a href="{{route('categories')}}" class="btn btn-warning">Go Back</a>
       
                 </form>

       
     
        </div>
    
        
@endsection