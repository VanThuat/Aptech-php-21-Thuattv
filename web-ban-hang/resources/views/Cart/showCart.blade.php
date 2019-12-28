@extends('master')
@section('content')
<div class="container">
                    <div>
                    <h4 class="text-center text-primary ">Giỏ Hàng Của Bạn</h4> <br>  
                        @if(count($carts))
                        <table class="table-condensed table table-bordered">
                            <thead>
                                <tr class="cart_menu">
                                    
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
                                        <img src="source/image/product/{{$cart->options->image}}" style="width:50px;hight:50px" alt="">
                                    </td>
                                    <td>
                                        <h4 class="text-lowercase"><a href="{{ route('chi-tiet-san-pham',$cart->id)}}">{{ $cart->name }}</a></h4>
                                    </td>
                                    <td>
                                        <p>{{ number_format($cart->price,0,",",".")}} <u>đ</u></p>
                                    </td>
                                    <td>
                                        <form method="POST" action="{{ url('updatecart') }}">
                                        {{csrf_field()}}
                                            <input style="width: 30px" type="number" name="qty" value="{{ $cart->qty }}" min="1">
                                            <input type="hidden" name="rowId" value="{{ $cart->rowId }}">
                                            <input type="submit" value="update">
                                        </form>
                                    </td>
                                    <td>
                                        <p>{{number_format($cart->subtotal,0,",",".")}} <u>đ</u></p>
                                    </td>
                                    <td>
                                        <a href="{{ route('xoa-khoi-gio',$cart->rowId) }}"><i class="fas fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h4 class="text-right">Tổng tiền: {{Cart::subtotal()}}<u>đ</u></h4 class="text-right">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6">
                                    <a href="/" class=" btn-success btn"> Quay lại mua thêm</a>
                                    <a href="{{route('xoa-gio-hang')}}" class=" btn-success btn mx-4"> Xóa toàn bộ sản phẩm</a>
                                </div>
                                <div class="col-6 text-right">
                                    <a href="{{route('dat-hang')}}" class="btn btn-primary">Đến trang thanh Toán</a>
                                </div>
                            </div>
                        </div>
                        @else
                            <h4 class=" text-center">Hiện tại trong giỏ hàng của bạn không có sản phẩm nào</h4>
                        @endif
                    </div>
                </div>
                <hr>
@endsection