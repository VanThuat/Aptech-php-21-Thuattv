<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit a product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2">
        @include('admin.elements.sidebar-admin')
        </div>
        <div class="col-10">
        <form action="{{route('products.update', $product->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            <div>
                <label for="">Title</label>
                <input class="w-100" type="text" value="{{$product->title}}" name="title">
            </div>
            <div>
                <label for="">img_path_product</label>
                <input class="w-100" type="text" value="{{$product->img_path}}" name="img_path">
            </div>
            <div>
                <label for="">Price</label>
                <input type="number" name="price" value="{{$product->price}}">
            </div>
            <div>
            <label class="text-primary font-weight-bold" for="">Content</label><br>       
                        
                    <textarea name="content" id="editor1" rows="10" cols="80">
                        {{$product->content}}
                    </textarea>
                
                    <script src="{{asset('/ckeditor/ckeditor.js')}}"></script>
                    <script src="{{asset('/ckfinder/ckfinder.js')}}"></script>
                    <script>
                    CKEDITOR.replace( 'editor1', {
                        filebrowserBrowseUrl: '{{ asset('ckfinder/ckfinder.html') }}',
                        filebrowserImageBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Images') }}',
                        filebrowserFlashBrowseUrl: '{{ asset('ckfinder/ckfinder.html?type=Flash') }}',
                        filebrowserUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}',
                        filebrowserImageUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}',
                        filebrowserFlashUploadUrl: '{{ asset('ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}'
                    } );
                    </script>
            
            </div>
            <button type="submit">Add</button>
        </form>
        </div>
    </div>
</div>
    
</body>
</html>