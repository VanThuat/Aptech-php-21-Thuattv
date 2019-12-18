<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Product Management</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
    </head>
    <body>
        <div class="container mt-4">
            <div class="row">
                <div class="col-2">
                    @include('admin.elements.sidebar-admin')
                </div>
                <div class="col-10">
                    <h5>Product Management</h5>
                    <hr>
                    <a class="btn btn-success font-weight-bold" href="{{asset('products/create')}}"> Add New Product</a>
                    <br><br>
                    <table class="table-bordered">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th class="text-center">Price</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="w-50 my-1">{{$product->title}}</td>
                                <td class="w-25 my-1 text-center">{{$product->price}}</td>
                                <td class="d-flex my-1">
                                    <form action="{{route('products.show', $product->id)}}" method="GET">
                                        <button type="submit">View</button>
                                    </form>
                                    <form action="{{route('products.edit', $product->id)}}" method="GET">
                                        <button type="submit">Edit</button>
                                    </form>
                                    <form action="{{route('products.destroy', $product->id)}}" method="POST">
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