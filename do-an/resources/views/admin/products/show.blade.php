<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shine Beauty</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</head>

<body>
    <!-- Đoạn mã nhúng facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0"></script>
    <!-- Kết thúc đoạn mã nhúng facebook -->

    <!-- header có logo -->   
    @include('layouts.elements.header')

    <!-- thanh dieu huong MENU DESKTOP -->
    @include('layouts.elements.menu-desktop')

    <!-- menu mobile -->
@include('layouts.elements.menu-mobile')

    <!-- Hình ảnh sp và thông tin tóm tăt -->
    <br>
    <div class="container">
    <div class="row">
        <div class="col-md-6 ">
        <img src="{{asset($product->img_path)}}" style="height:400px; width:400px" alt="">
        </div>
        <div class="col-md-6"><br><br>
        <h4 class="my-3">{{$product->title}}</h4>
        <h4 class="text-primary my-3">Giá chỉ: {{$product->price}} VNĐ</h4>
        <h5 class=" text-success my-3">Tư vấn: 0909 792 398</h5>
        <h5 class=" text-warning my-3">Giao hàng & thanh toán: Giao hàng miễn phí & thu tiền tại nhà trên toàn quốc</h5>
        <a href="http://localhost:8000/addcart/{{$product->id}}">
        <button class="btn btn-success btn-lg">THÊM VÀO GIỎ</button>
        </a>
        </div>
    </div>
</div>   

<!-- Thông tin chi tiết sp và sp liên quan -->
<hr>
<div class="container">
    <div class="row">
        <div class="col-md-8">
        <h5 class="text-white bg-primary">CHI TIẾT SẢN PHẨM</h5>
        <?php echo"$product->content"  ?>
        <!-- {{$product->content}} -->
        </div>
        <div class="col-md-4">
        <h5 class="text-white bg-primary">SẢN PHẨM LIÊN QUAN</h5>
        </div>
    </div>
</div>   
<hr>

    <!-- footer -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-4">
                <h5>THÔNG TIN LIÊN HỆ</h5>
                <hr>
                <h6>Công Ty TNHH Thương Mại & Dịch Vụ Tỏa Sáng Việt</h6>
                <p><strong>Địa chỉ:</strong> Khu sinh thái Hòa Xuân, Phường Hòa Xuân, Quận Cẩm Lệ, Tp Đà Nẵng</p>
                <p><strong>Điện thoai:</strong> 0909 792 398</p>
                <p><strong>Email</strong> : hotro@myphamshinebeauty.vn</p>
            </div>
            <div class="col-md-4 ">
                <h5>LIÊN KẾT</h5>
                <hr>
                <ul class="list-unstyled">
                    <li class="my-2"><a class="text-dark" href="">Trang chủ</a></li>
                    <li class="my-2"><a class="text-dark" href="">Giới thiệu</a></li>
                    <li class="my-2"><a class="text-dark" href="">Sản phẩm</a></li>
                    <li class="my-2"><a class="text-dark" href="">Tin tức</a></li>
                    <li class="my-2"><a class="text-dark" href="">Liên hệ</a></li>
                </ul>
            </div>
            <div class="col-md-4">
                <h5>FACEBOOK</h5>
                <hr>
                <div class="fb-page" data-href="https://www.facebook.com/pg/mpshinebeauty" data-tabs="" data-width=""
                    data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false"
                    data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/pg/mpshinebeauty" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/pg/mpshinebeauty">Mỹ Phẩm Cao Cấp SHINE Beauty</a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>

</body>

</html>