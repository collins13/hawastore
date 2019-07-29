@extends('layouts.admin')




@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="{{route('role')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Go back</a>
    </div>

    <!-- Content Row -->
<form action="{{route('admin.store')}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="name">name:</label>
            <input type="name" name="name" class="form-control col-md-6" id="name" placeholder="">
        </div>
        <div class="form-group">
            <label for="name">Display name:</label>
            <input type="text" name="display_name" class="form-control col-md-6" placeholder="">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control col-md-6" name="description" rows="3"></textarea>
        </div>
        <div class="form-check form-group">
            @foreach ($permissions as $permission)
            {{$permission->name}}
            <input type="checkbox" name="permission[]" value="{{$permission->id}}"> <br>
            @endforeach
        </div>
        <button class="btn btn-outline-success">Assign</button>
    </form>
</div>
<!-- /.container-fluid -->
@endsection