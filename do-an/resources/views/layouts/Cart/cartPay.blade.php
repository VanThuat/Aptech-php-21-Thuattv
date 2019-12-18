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
            <form class="form-horizontal" method="post" action="{{ route('get.savecart')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="col-md-6 col-xs-12">
                    <!--REVIEW ORDER-->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Thông tin đơn hàng 
                            <div class="pull-right">
                                <small><a class="afix-1" href="{{route('showcart')}}">Xem lại chi tiết đơn hàng</a>
                                </small>
                            </div>
                        </div>
                        <div class="panel-body">
                            @foreach($carts as $cart)
                            <div class="form-group">
                                <div class="col-sm-3 col-xs-3">
                                    <img class="img-responsive" src="{{asset($cart->options->image)}}" style="width:100px;hight:60px"/>
                                </div>
                                <div class="col-sm-6 col-xs-6">
                                    <div class="col-xs-12">
                                        <p name="pro_id">{{$cart->name}}</p>
                                    </div>
                                    <div class="col-xs-12"><small>Số lượng: <span">{{$cart->qty}}</span></small></div>
                                </div>
                                <div class="col-sm-3 col-xs-3 text-right">
                                    <h6><span >{{ $cart->price }}</span>đ</h6>
                                </div>
                            </div>
                            @endforeach
                            <div class="form-group">
                                <hr />
                            </div>
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <strong>Tổng tiền cần thanh toán</strong>
                                    <div class="pull-right"><span >{{Cart::subtotal() }}</span><span>đ</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--REVIEW ORDER END-->
                </div>
                <div class="col-md-6 col-xs-12">
                    <!--SHIPPING METHOD-->
                    <div class="panel panel-info">
                        <div class="panel-heading text-center ">Nhập thông tin địa chỉ</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <lable for="name" class="col-md-12"><strong>Họ và tên:</strong></lable>
                                <div class="col-md-12">
                                    <input id="name" type="text" name="name" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <lable for="city" class="col-md-12"><strong>Địa chỉ:</strong></lable>
                                <div class="col-md-12">
                                    <input id="city" type="text" name="address" class="form-control" value="" />
                                </div>
                            </div>
                            <div class="form-group">
                                <lable for="phone" class="col-md-12"><strong>Số điện thoại:</strong></lable>
                                <div id="phone" class="col-md-12"><input type="text" name="phone" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <lable for="mail" class="col-md-12"><strong>Email:</strong></lable>
                                <div if="mail" class="col-md-12"><input type="text" name="email" class="form-control" value="" /></div>
                            </div>
                            <div class="form-group">
                                <lable for="note" class="col-md-12"><strong>Ghi chú:</strong></lable>
                                <div if="mail" class="col-md-12">
                                    <textarea class="form-control" name="note" id="note" cols="30" placeholder="Thông tin cần bổ sung..." rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="submit" class=" btn btn-success">Xác nhận thông tin</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--SHIPPING METHOD END-->
                    <!--CREDIT CART PAYMENT-->
                </div>
            </form>
        </div>
        <hr>
        <!-- footer -->
        @include('layouts.elements.footer')
    </body>
</html>