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
                    <h2 class="blog-header-logo text-dark">Category Management</h2>
                </div>
                <div class="col-3 d-flex justify-content-end align-items-center">
                    <a class="btn btn-danger" href="{{asset('categories/create')}}">
                        Create new a category
                    </a>
                </div>
            </div>
            <hr>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Categories title</th>
                        <th class="">Slug</th>
                        <th class="">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="w-50 my-1"><a href="{{route('categories.show', $category->id)}}">{{$category->title}}</a></td>
                        <td class="w-25 my-1">{{$category->slug}}</td>
                        <td class="d-flex my-1">
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
@endsection