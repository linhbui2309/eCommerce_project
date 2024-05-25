
@extends('layouts.admin')
@section('title','Profile')
@section('content')
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">

        @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}

        </div>
        @endif
        <div class="card">
      <div class="card-header">
        <h5 class="card-title"> Role: {{ $role->name }}
        <a href="{{url('permissions')}}" class="btn btn-ganger float-end">Back</a>
        </h5>
      </div>

        <!-- Nested Child Card -->
     
          <div class="card-body">
           <form action="{{url('roles/'.$role->id.'/give-permissions')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                @error('permission')
                <span class="text-danger">{{$message}}</span>
                @enderror
                <label for="">Permissions</label>
                <div class="row">
                    @foreach($permissions as $permission)
                    <div class="col-md-3">
                        <label>
                        <input type="checkbox" name="permission[]" value="{{$permission->name}}"  

                        {{ in_array($permission->id, $rolePermissions) ? 'checked':'' }} />
                        {{ $permission->name }}
                    </label>
                    
                    </div>
                    @endforeach
                </div>
               

            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>

           </form>
          </div>
        

        <p class="card-text">This is the content of the parent card.</p>
      </div>
    </div>

    </div>

   

  <!-- Add Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/js/bootstrap.min.js"></script>
</body>
@stop








         
