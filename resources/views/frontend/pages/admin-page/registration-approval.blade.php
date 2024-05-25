@extends('layouts.admin')
@section('title','Registration Approval')




@section('content')
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<body>
    <div class="container">
        <h2 class="mt-5">User Registration Approval</h2>
        @if (session('success'))
            <div class="alert alert-success mt-4" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if ($users->isEmpty())
            <div class="alert alert-info mt-4" role="alert">
                No pending registration requests.
            </div>
        @else
            <table class="table mt-4">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->status }}</td>
                            
                            
                                <td><a href="{{ route('admin.approve', $user->id) }}" class="btn btn-success">Approve</a></td>
                                <td><a href="{{ route('admin.reject', $user->id) }}" class="btn btn-danger">Reject</a></td>
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Bootstrap JS and dependencies (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@stop
