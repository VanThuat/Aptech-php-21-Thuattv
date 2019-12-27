<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Product Categories Management</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-2">
                    @include('sidebar-admin')
                </div>
                <div class="col-10">
                    <h5>Categories Management</h5>
                    <hr>
                    <a class="btn btn-light font-weight-bold" href="{{asset('categories/create')}}"> Add New Categories</a>
                    <br><br>
                    <table class="table-bordered">
                        <thead>
                            <tr>
                                <th>Categories Name</th>
                                <th class="">Slug</th>
                                <th class="">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td class="w-50 my-1">{{$category->name}}</td>
                                <td class="w-25 my-1">{{$category->slug}}</td>
                                <td class="d-flex my-1">
                                    <form action="{{route('categories.show', $category->id)}}" method="GET">
                                        <button type="submit">View</button>
                                    </form>
                                    <form action="{{route('categories.edit', $category->id)}}" method="GET">
                                        <button type="submit">Edit</button>
                                    </form>
                                    <form action="{{route('categories.destroy', $category->id)}}" method="POST">
                                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>