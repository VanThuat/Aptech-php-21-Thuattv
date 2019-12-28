@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title text-primary">Đặt hàng</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trang-chu')}}">Trang chủ</a> / <span>Đặt hàng</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
		<div id="content">
			
			<form action="{{route('dat-hang')}}" method="POST" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">@if(Session::has('msg'))<h2 class="text-center text-danger">{{Session::get('msg')}}</h2>@endif <hr></div>
				<div class="row">
					<div class="col-sm-6">
						<h5>Thông tin người đặt</h5>
						<div class="space20">&nbsp;</div>

						<div class="form-block">
							<label for="name">Họ tên*</label>
							<input type="text" name="name" id="name" placeholder="Họ tên" required>
						</div>
						<div class="form-block">
							<label>Giới tính </label>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nam" checked="checked" style="width: 10%"><span style="margin-right: 10%">Nam</span>
							<input id="gender" type="radio" class="input-radio" name="gender" value="nữ" style="width: 10%"><span>Nữ</span>
										
						</div>

						<div class="form-block">
							<label for="email">Email*</label>
							<input type="email" id="email" name="email" required placeholder="expample@gmail.com">
						</div>

						<div class="form-block">
							<label for="address">Địa chỉ*</label>
							<input type="text" id="address" name="address" placeholder="Street Address" required>
						</div>
						<div class="form-block">
							<label for="phone">Điện thoại*</label>
							<input type="text" id="phone" name="phone" required>
						</div>
						
						<div class="form-block">
							<label for="notes">Ghi chú</label>
							<textarea id="notes" name="notes"></textarea>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="your-order">
							<div class="your-order-head"><h5>Đơn hàng của bạn</h5></div>
							<div class="your-order-body" style="padding: 0px 10px">
								<div class="your-order-item">
									<div>
                                    @if(Session::has('cart'))
                                    @foreach($product_cart as $cart)
									<!--  one item	 -->
										<div class="media">
											<img width="25%" src="source/image/product/{{$cart['item']['image']}}" alt="" class="pull-left">
											<div class="media-body">
												<p class="font-large">{{$cart['item']['name']}}</p>
												<span class="color-gray your-order-info">Đơn giá: @if($cart['item']['promotion_price']!=0)
												{{number_format($cart['item']['promotion_price'],0,",",".")}}<u>đ</u>
											@else
												{{number_format($cart['item']['unit_price'],0,",",".")}}<u>đ</u>
											@endif</span>
												<span class="color-gray your-order-info">Số lượng: {{$cart['qty']}}</span>
											</div>
										</div>
                                    <!-- end one item -->
                                    @endforeach
                                    @endif
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="your-order-item">
									@if(Session::has('cart'))
									<div class="pull-left"><p class="your-order-f18">Tổng tiền:</p></div>
									<div class="pull-right"><h5 class="color-black">{{number_format($totalPrice)}}<u>đ</u></h5></div>
									<div class="clearfix"></div>
									@else
									<div><p class="your-order-f18 text-center text-success">Đơn hàng của bạn hiện tại không có sản phẩm nào</p></div>
									@endif
								</div>
							</div>
							<div class="your-order-head"><h5>Hình thức thanh toán</h5></div>
							
							<div class="your-order-body">
								<ul class="payment_methods methods">
									<li class="payment_method_bacs">
										<input id="payment_method_bacs" type="radio" class="input-radio" name="payment" value="COD" checked="checked" data-order_button_text="">
										<label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
										<div class="payment_box payment_method_bacs" style="display: block;">
											Bạn sẽ nhận hàng, kiểm tra rồi mới thanh toán tiền cho nhân viên giao hàng.
										</div>						
									</li>

									<li class="payment_method_cheque">
										<input id="payment_method_cheque" type="radio" class="input-radio" name="payment" value="ATM" data-order_button_text="">
										<label for="payment_method_cheque">Chuyển khoản </label>
										<div class="payment_box payment_method_cheque" style="display: none;">
											Chuyển tiền đến tài khoản sau:
											<br>- Số tài khoản: 123 456 789
											<br>- Chủ TK: Trần Văn Thuật
											<br>- Ngân hàng Agribank, Chi nhánh Hà Tĩnh
										</div>						
									</li>
									
								</ul>
							</div>

							<div class="text-center">
								<button type="submit" class="beta-btn primary" >Đặt hàng <i class="fa fa-chevron-right"></i></button>
							</div>
						</div> <!-- .your-order -->
					</div>
				</div>
			</form>
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection