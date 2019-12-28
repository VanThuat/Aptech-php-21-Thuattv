@extends('admin.adminMaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
        <h4 class="mt-3">FORM TO CREATE NEW PRODUCT</h4>
        <form action="{{route('products.store')}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="my-4">
                <label class="font-weight-bold" for="">Tên sản phẩm</label>
                <input class="w-100" type="text" name="name">
            </div>
            <div class="form-inline">
                <label for="id_type" class="mb-1">Sản phẩm thuộc dòng:  </label>
                <select name="id_type" id="id_type" class="form-control input-inline">
                    <option value="1">Son môi</option>
                    <option value="2">Các sp cho mặt</option>
                    <option value="3">Các sp cho thân</option>
                    <option value="4">Các sp cho tóc</option>
                    <option value="5">Phụ khoa</option>
                </select>
            </div>
            <div class="form-inline">
                <label for="new" class="mb-1">Sản phẩm:  </label>
                <select name="new" id="new" class="form-control input-inline">
                    <option value="1">Mới</option>
                    <option value="2">Cũ</option>
                    
                </select>
            </div>
        
            <div class="my-4">
                <label class="font-weight-bold" for="">Giấ gốc</label>
                <input type="number" name="unit_price">
            </div>
            <div class="my-4">
                <label class="font-weight-bold" for="">Giá khuyến mãi</label>
                <input type="number" name="promotion_price">
            </div>
            <div class="my-4">
            <label class="font-weight-bold" for="">Mô tả</label><br>       
                        
                    <textarea name="description" id="editor1" rows="10" cols="80">
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
@endsection