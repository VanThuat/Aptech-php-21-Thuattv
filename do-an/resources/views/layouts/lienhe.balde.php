<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Giỏ hàng</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <link href="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
        <div class="container">
            <h3>
                Thông tin thanh toán
            </h3>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{route('showcart')}}" title="Giỏ hàng">Giỏ hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thông tin mua hàng</li>
            </ol>
        </div>
        <div class=" container">
            <div class="row">
                <div class="col-12">
                    <h1>LIÊN HỆ</h1>
                    <span style="font-size: 15pt; color: rgb(255, 0, 0);" data-mce-style="font-size: 15pt; color: #ff0000;">
                        <b>Hotline:</b><b>&nbsp;</b><b>0935 695 688</b><b>(</b>
                        <span style="color: rgb(0, 204, 255);" data-mce-style="color: #00ccff;">
                            <b>Zalo</b>
                        </span>
                        <span style="color: rgb(0, 0, 255);" data-mce-style="color: #0000ff;">
                            <b>Facebook</b>
                        </span><b>)</b>
                    </span>
                </div>
            </div>
        </div>
        <!-- footer -->
        @include('layouts.elements.footer')
    </body>
</html>