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
                    @include('sidebar-admin')
                </div>
                <div class="col-10">
                    <h5>Product Management</h5>
                    <hr>
                    <a class="btn btn-success font-weight-bold" href="{{asset('products/create')}}"> Add New Product</a>
                    <br><br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Tên sp</th>
                                <th class="text-center">Giá gốc</th>
                                <th class="text-center">Giá khuyến mãi</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="w-50 my-1">{{$product->name}}</td>
                                <td class="w-25 my-1 text-center">{{$product->unit_price}}</td>
                                <td class="w-25 my-1 text-center">{{$product->promotion_price}}</td>
                                <td class="d-flex my-1">
                                    <a class="btn btn-default" href="{{route('chi-tiet-san-pham', $product->id)}}"></a>
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