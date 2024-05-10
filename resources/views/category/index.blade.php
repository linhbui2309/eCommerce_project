
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop bán hàng </title>

    <!-- Liên kết CSS Bootstrap bằng CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class ="container">
    <div class ="row">
        <div class ="col-md-12">
            <div class = "card">
                <div class= "card-header">
                    <h4>Categories
                        <a href="{{ url('categories/create')}}" class = "btn btn-primary float-end">Add categories</a>
                    </h4>

                </div>
                <div class ="card-body">
                    
                    <table class ="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>Description</th>
                                <th>Photo</th>
                                <th>Is Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <body>
                            @foreach ($categories as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->description}}</td>
                                <td>
                                    <img src="{{ asset($item->image) }}" style="height:100px;width:150px;" alt="Img">
                                    
                                </td>
                                <td>{{$item->is_active}}</td>
                                <td>
                                    <a href="{{ url('categories/'.$item->id.'/edit') }}">Edit</a>
                                    <a href="{{ url('categories/'.$item->id.'/delete') }}">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </body>
                    </table>

                </div>
            </div>

        </div>

    </div>

</div>
</body>
