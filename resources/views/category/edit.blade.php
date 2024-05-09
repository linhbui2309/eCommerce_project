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

    <!-- Main content -->
    <div class="container">
        
        <h1>Form Edit </h1>
        @if (session('status'))
        <div class="alert alert-success">{{session('status')}}</div>
        @endif

        <form name="frmCreate" method="post" action="{{url('categories/'.$category->id.'/edit')}}" class="form">
            @csrf
            @method('PUT')
            <table class="table">
               <tr>
                    <td>Tên </td>
                    <td><input type="text" name="name" value="{{ $category->name }}" id="name" class="form-control" />
                    @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                </td>
                    
                </tr>
                <tr>
                    <td>Ghi chú</td>
                    <td><textarea name="description" value="{{ $category->description }}" id="description" class="form-control"></textarea>
                    @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                </td>
                    
                </tr>
                <tr>
                    <td>Ảnh đại diện</td>
                    <td><input type="text" name="image" id="image" class="form-control" /></td>
                </tr>
                <tr>
                    <td>Is Active </td>
                    <td><input type="checkbox" name="is_active" value="{{ $category->is_active }}" >
                    @error('is_active') <span class="text-danger">{{ $message }}</span> @enderror</td>
                   
                </tr>
                <tr>
                    <td colspan="2">
                        <button name="btnSave" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                    </td>
                </tr>
            </table>
            <div class= "card-header">
                    
                        <a href="{{ url('categories')}}" class = "btn btn-primary float-end">Back</a>
                    

                </div>
        </form>
    </div>