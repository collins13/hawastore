@extends('layouts.admin')




@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{route('admin.create')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Create New Role</a>
        </div>

        <table class="table">
          
          <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Display Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
              <tr>
              <th scope="row">{{$role->id}}</th>
                <td>{{$role->name}}</td>
                <td>{{$role->display_name}}</td>
                <td>{{$role->description}}</td>
                <td>
                  <a href="{{route('admin.edit', $role->id)}}" class="btn btn-warning">Edit</a>
                <form action="{{route('admin.delete', $role->id)}}" method="POST">
                    {{ csrf_field() }}
                    {{method_field('POST')}}
                    <input type="submit" class="btn btn-outline-success" value="Delete">
                  </form>
                </td>
              </tr>
              @empty($role)
                  No role available
              @endempty
              @endforeach
              
            </tbody>
        </table>

        <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->
@endsection