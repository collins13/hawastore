@extends('layouts.admin')




@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">  Categories</h1>
        </div>
        <hr>
        <div class="container">
                @include('admin.includes.messages')
   <div class="row">
 
       <div class="col-md-4">
            <form action="{{route('categories')}}" method="POST"  enctype="multipart/form-data">
                {{ csrf_field() }}
                   <div class="row">
                           <div class="form-group col-md-12">
                                   <label for="title">Category Name</label>
                                   <input type="text" class="form-control"  name="name" id="name" aria-describedby="categoryType" required placeholder="Enter category type">
                                 </div>
                                    
                                     
                   </div>
                           <button type="submit" class="btn btn-primary">AddCategory</button>
                       <a href="/admin" class="btn btn-warning">Go Back</a>
       
                 </form>

       </div>
       <div class="col-md-8">
            <table class="table">
                    <thead>
                    
                      <tr>
   
                      <th scope="col">#</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Actions</th>
                      </tr>
                     
                    </thead>
                    <tbody>
                            @if(count($categories) > 0)
                            @foreach ($categories as $category )
                      <tr>
                       
                       
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td>
                        <a href="{{route('category',$category->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <br/>
                        <br/>
                        <form action="{{route("category.delete", $category->id)}}" method="POST">
                                {{ csrf_field() }}
                                @method('DELETE')
                                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                       
                                 </form>
                        </td>
                               
                     
                      </tr>
                      @endforeach
                      @else
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Helolo there!</strong> Categories not found.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          @endif
                    </tbody>
                  </table>
                {{  $categories->links()}}

       </div>
   </div>
       
     
        </div>
    
        
@endsection