@extends('admin.adminMaster')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-2">
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
@endsection
