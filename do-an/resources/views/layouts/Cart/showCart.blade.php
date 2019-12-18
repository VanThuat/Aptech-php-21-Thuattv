<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Giỏ hàng</title>
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
        <main>
            <section>
                <div class="container">
                    <div>
                    <h4 class="text-center text-primary ">Giỏ Hàng Của Bạn</h4> <br>  
                        @if(count($carts))
                        <table class="table-condensed table table-bordered">
                            <thead>
                                <tr class="cart_menu">
                                    <td>Id</td>
                                    <td>Hình mẫu</td>
                                    <td>Tên SP</td>
                                    <td>Giá</td>
                                    <td>Số lượng</td>
                                    <td>Thành tiền</td>
                                    <td> Xóa Sp</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($carts as $cart)
                                <tr>
                                    <td>
                                        <p>#{{ $cart->id }}</p>
                                    </td>
                                    <td>
                                        <img src="{{asset($cart->options->image)}}" style="width:50px;hight:50px" alt="">
                                    </td>
                                    <td>
                                        <h4 class="text-lowercase"><a href="http://localhost:8000/products/{{$cart->id}}">{{ $cart->name }}</a></h4>
                                    </td>
                                    <td>
                                        <p>{{ $cart->price}}.000 VNĐ</p>
                                    </td>
                                    <td>
                                        <form method="GET" action="{{ url('updatecart') }}">
                                            <input style="width: 30px" type="number" name="qty" value="{{ $cart->qty }}" min="1">
                                            <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                            <input type="submit" value="update">
                                        </form>
                                    </td>
                                    <td>
                                        <p>{{($cart->subtotal)}}.000 VNĐ</p>
                                    </td>
                                    <td>
                                        <a href="{{ url('removecart/'.$cart->rowId) }}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h4 class="text-right">Tổng tiền: {{ Cart::subtotal() }}0 VNĐ</h4 class="text-right">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <a href="/" class=" btn-success btn"> Quay lại mua thêm</a>
                                    <a href="{{route('get.formatcart')}}" class=" btn-success btn mx-4"> Xóa toàn bộ sản phẩm</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('get.cartpay')}}" class="btn btn-primary">Đến trang thanh Toán</a>
                                </div>
                            </div>
                        </div>
                        @else
                            <h4 class=" text-center">Hiện tại trong giỏ hàng của bạn không có sản phẩm nào</h4>
                        @endif
                    </div>
                </div>
            </section>
            <!--/#cart_carts-->
        </main>
        <hr>
        <!-- footer -->
        @include('layouts.elements.footer')
    </body>
</html>