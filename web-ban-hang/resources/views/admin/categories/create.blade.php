@extends('admin.adminMaster')
@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
        <h4>FORM TO CREATE NEW PRODUCT CATEGORY</h4>
        <form action="{{route('categories.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="my-4">
                <label class="font-weight-bold" for="">Title</label>
                <input class="w-100" type="text" name="title">
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Slug</label>
                <input class="w-100" type="text" name="slug"><br>
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Content</label>
                <input class="w-100" type="text" name="content">
            </div>
            
            <button type="submit">Add</button>
        </form>
        </div>
    </div>
</div>
@endsection