
@extends('layouts.admin')
@section('title','Profile')
@section('content')
  <!-- Add Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<body>
  <div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
        <div class="card">
      <div class="card-header">
        <h5 class="card-title"> Create Permissions
        <a href="{{url('permissions')}}" class="btn btn-ganger float-end">Back</a>
        </h5>
      </div>

        <!-- Nested Child Card -->
     
          <div class="card-body">
           <form action="{{url('permissions')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="">Permission Name</label>
                <input type="text" name="name" class="form-control">

            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Save</button>
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








         
