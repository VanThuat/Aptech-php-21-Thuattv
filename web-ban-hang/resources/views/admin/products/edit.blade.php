@extends('admin.adminMaster')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-2">
        </div>
        <div class="col-10">
            <h3 class="text-center" >Chỉnh sửa thông tin sản phẩm</h3>
            <hr>
            <form action="{{route('products.update', $product->id)}}" method="POST">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="PUT">
                <table class="table table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th >Thông tin</th>
                            <th >Nội dung</th>
                            <th >Thông tin</th>
                            <th >Nội dung</th>
                        </tr>
                    </thead>
                    <tr>
                        <td><label for="name">Tên</label></td>
                        <td><input id="name" class="w-100 text-center" type="text" value="{{$product->name}}" name="name"></td>
                        <td><label for="">Phân loại sản phẩm</label></td>
                        <td>
                            <select name="id_type" id="id_type" class="ml-2 form-control input-inline">
                                <option value="1">Son môi</option>
                                <option value="2">Chăm sóc mặt</option>
                                <option value="3">Chăm sóc body</option>
                                <option value="4">Chăm sóc tóc</option>
                                <option value="5">Phụ khoa</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="image">Hình sản phẩm</label></td>
                        <td><input class="w-100 text-center" id="image" type="text" value="{{$product->image}}" name="image" style="width: 200px"></td>
                        <td><label for="new" class="mb-1">Sản phẩm  </label></td>
                        <td>
                            <select name="new" id="new" class="ml-2 form-control input-inline" value="">
                                <option value="1">Mới</option>
                                <option value="0">Cũ</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="unit_price">Giá gốc </label></td>
                        <td><input class="w-100 text-center" type="number" id="unit_price" name="unit_price" value="{{$product->unit_price}}"></td>
                        <td><label for="promotion_price">Giá khuyến mãi: </label></td>
                        <td><input class="w-100 text-center" type="number" id="promotion_price" name="promotion_price" value="{{$product->promotion_price}}"></td>
                    </tr>
                </table>
                <div>
                    <label class="text-primary" for="editor1">Mô tả vài nét về sản phẩm</label><br>      
                    <textarea name="description" id="editor1" rows="6" cols="80">
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
                <button class="btn btn-primary btn-lg" type="submit">Cập nhật</button>

            </form>
            <br>
        </div>
    </div>
</div>
@endsection