<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        
        <div class="col-md-6">
            <div class="card">
            @if (session('status'))
            <div class="alert alert-success">{{session('status')}}</div>
            @endif
                <div class="card-header">
                    Register for {{Auth::user()->email}}
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('registration.store') }}">
                        @csrf
                        
                        @error('email')
                        <span class="text-danger">Email Not Exist, Please Try Again</span>
                        @enderror

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input id="name" type="text" class="form-control" name="name" required autofocus>
                        </div>

                        <label for="role">Choose a role:</label>
                        <select id="role" name="role">
                            <option value="admin">Admin</option>
                            <option value="manager">Manager</option>
                        </select>

                     

                        <div class="form-group mb-0">
                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>
                        <a href="{{url('/')}}" class="btn btn-ganger float-end">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>