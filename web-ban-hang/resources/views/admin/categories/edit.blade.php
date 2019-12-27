<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2">
        @include('sidebar-admin')
        </div>
        <div class="col-10">
        <h4 class="mt-4">FORM TO EDIT PRODUCT CATEGORY</h4>
        <form action="{{route('categories.update',$category->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            <div class="my-4">
                <label class="font-weight-bold" for="">Name</label>
                <input class="w-100" type="text" value="{{$category->name}}" name="name">
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Slug</label>
                <input class="w-100" type="text" value="{{$category->slug}}" name="slug"><br>
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Description</label>
                <input class="w-100" type="text" value="{{$category->description}}" name="description">
            </div>
            
            <button type="submit">Add</button>
        </form>
        </div>
    </div>
</div>
    
</body>
</html>