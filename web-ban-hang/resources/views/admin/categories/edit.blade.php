@extends('admin.adminMaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
        <h4 class="mt-4">FORM TO EDIT PRODUCT CATEGORY</h4>
        <form action="{{route('categories.update',$category->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            <div class="my-4">
                <label class="font-weight-bold" for="">Name</label>
                <input class="w-100" type="text" value="{{$category->title}}" name="title">
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Slug</label>
                <input class="w-100" type="text" value="{{$category->slug}}" name="slug"><br>
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Description</label>
                <input class="w-100" type="text" value="{{$category->content}}" name="content">
            </div>
            
            <button type="submit">Update</button>
        </form>
        </div>
    </div>
</div>
@endsection