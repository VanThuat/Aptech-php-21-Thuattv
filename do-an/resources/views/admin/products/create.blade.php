<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-2">
        @include('admin.elements.sidebar-admin')
        </div>
        <div class="col-10">
        <h4 class="mt-3">FORM TO CREATE NEW PRODUCT</h4>
        <form action="{{route('products.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="my-4">
                <label class="font-weight-bold" for="">Title</label>
                <input class="w-100" type="text" name="title">
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">img_path_product</label>
                <input class="w-100" type="text" name="img_path"><br>
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Price</label>
                <input type="number" name="price">
            </div>
            <div class="my-4">
            <label class="font-weight-bold" for="">Content</label><br>       
                        
                    <textarea name="content" id="editor1" rows="10" cols="80">
                        Your contents are here.
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