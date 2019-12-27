<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
<div class="container mt-4">
    <div class="row">
        <div class="col-2">
        @include('sidebar-admin')
        </div>
        <div class="col-10">
            <h5>Category Name</h5>
            <p>{{$category->name}}</p>
            <h5>Category slug</h5>
            <p>{{$category->slug}}</p>
            <h5>Category description</h5>
            <p>{{$category->description}}</p>
            <br>
            <a class="btn btn-lg btn-light" href="{{route('categories.edit', $category->id)}}">Edit</a>
        </div>
    </div>
</div>
    
</body>
</html>