
@extends('layouts.admin')
@section('title','Profile')
@section('content')
  @include('backend.role-permission.nav-links')
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
            @endif
        <div class="card mt-3">
      <div class="card-header">
        <h5 class="card-title">Permissions
        <a href="{{url('permissions/create')}}" class="btn btn-primary float-end">Add</a>
        </h5>
      </div>

        <!-- Nested Child Card -->
        <div class="card">
          <div class="card-body">
           <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Action</th>
              
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                <tr>
                    <td>{{$permission->id}}</td>
                    <td>{{$permission->name}}</td>
                    <td><a href="{{url('permissions/'.$permission->id.'/edit')}}" class="btn btn-success">Edit</a></td>
                    <td><a href="{{url('permissions/'.$permission->id.'/delete')}}" class="btn btn-danger">Delete</a></td>
                </tr>
                @endforeach
            </tbody>

           </table>
          </div>
        </div>

        <p class="card-text">This is the content of the parent card.</p>
      </div>
    </div>

    </div>

   

  <!-- Add Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>

@stop








         
