<!-- thanh dieu huong menu DESKTOP -->
<div class="container mt-0 d-md-block d-none my-2">
        <div class="row">
            <div class="col-8">
                <ul class="d-flex list-unstyled" style="position:sticky; top:0">
                    <li><a href="/" class="text-dark font-weight-bold mx-3">TRANG CHỦ</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">GIỚI THIỆU</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">SẢN PHẨM</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">TIN TỨC</a></li>
                    <li><a href="#" class="text-dark font-weight-bold mx-3">LIÊN HỆ</a></li>
                    
                </ul>
            </div>
            <div class="col-4">
				<ul class="d-flex list-unstyled text-right ">
					<li class="input-group p-1 mr-2">
						<input class="form-control" type="text"  placeholder="Tên sản phẩm...">
					</li>
					<li class=" notifications-menu open">
						<div class="dropdown-toggle">
							<a href="{{route('showcart')}}">
                <i class="fas fa-cart-plus"><p>{{Cart::count()}}</p></i>
							</a>
							<div class="<p>{{Cart::count()}}</p> clearfix" style="display: none;">
								@if(Cart::count()>0)
								<table class="table-total">
									<tr>
										<td style="text-align:left">TỔNG TIỀN:</td>
										<td style="text-align:right" >{{Cart::subtotal() }}₫</td>
									</tr>
									<tr>
										<td><a href="{{route('showcart')}}t" class="linktocart">Xem giỏ hàng</a></td>
										<td><a href="{{route('get.cartpay')}}" class="linktocheckout">Thanh toán</a></td>
									</tr>
								</table>
								@else
								<span class="line"></span>
								<table>
									<tr>
										<td>Hiện chưa có sản phẩm</td>								
									</tr>
								</table>
								@endif
							</div>
						</div>
					</li>
				</ul>
			</div>
        </div>
    </div>
    