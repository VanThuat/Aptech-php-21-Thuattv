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
        @include('sidebar-admin')
        </div>
        <div class="col-10">
        <form action="{{route('products.update', $product->id)}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            <div>
                <label for="">Tên</label>
                <input class="w-100" type="text" value="{{$product->name}}" name="name">
            </div>
            <div class="form-inline">
                <label for="id_type" class="mb-1">Phân loại sản phẩm:  </label>
                <select name="id_type" id="id_type" class="ml-2 form-control input-inline">
                    <option value="1">Son môi</option>
                    <option value="2">Chăm sóc mặt</option>
                    <option value="3">Chăm sóc body</option>
                    <option value="4">Chăm sóc tóc</option>
                    <option value="5">Phụ khoa</option>
                </select>
            </div>
            <div>
                <label for="image">Hình sản phẩm</label>
                <input id="image" type="text" value="{{$product->image}}" name="image">
            </div>
            <div>
                <label for="unit_price">Giá gốc: </label>
                <input type="number" id="unit_price" name="unit_price" value="{{$product->unit_price}}">
            </div>
            <div>
                <label for="promotion_price">Giá khuyến mãi: </label>
                <input type="number" id="promotion_price" name="promotion_price" value="{{$product->promotion_price}}">
                
            </div>
            <div class="form-inline">
                <label for="new" class="mb-1">Sản phẩm:  </label>
                <select name="new" id="new" class="ml-2 form-control input-inline" value="">
                    <option value="{{$product->id_type}}">Mới</option>
                    <option value="{{$product->id_type}}">Cũ</option>
                </select>
            </div>
            <div>
            <label class="text-primary font-weight-bold" for="">Miêu tả</label><br>       
                        
                    <textarea name="description" id="editor1" rows="10" cols="80">
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