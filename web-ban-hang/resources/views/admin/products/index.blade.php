@extends('admin.adminMaster')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-3 pt-1">
                    <a class="text-muted ml-2" href="{{route('trang-chu')}}">HOME</a>
                </div>
                <div class="col-6 text-center">
                    <h2 class="blog-header-logo text-dark">Product Management</h2>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-center">
                    <a class="btn btn-danger" href="{{asset('products/create')}}">
                    Create new a product
                    </a>
                </div>
            </div>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Hình</th>
                        <th>Tên sp</th>
                        <th class="text-center">Giá gốc</th>
                        <th class="text-center">Giá khuyến mãi</th>
                        <th class="text-center">New</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td><a href="{{route('chi-tiet-san-pham', $product->id)}}"><img src="source/image/product/{{$product->image}}" width=50px; hight=50px; alt=""></a></td>
                        <td class="w-50 my-1"><a href="{{route('chi-tiet-san-pham', $product->id)}}">{{$product->name}}</a></td>
                        <td class="w-25 my-1 text-center">{{$product->unit_price}}</td>
                        <td class="w-25 my-1 text-center">{{$product->promotion_price}}</td>
                        <td class="w-25 my-1 text-center">
                        @if($product->new==0)Cũ</span>
                        @else Mới
                        @endif
                        </td>
                        <td class="d-flex my-1">
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
@endsection