
		<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href="{{route('gioi-thieu')}}"><i class="fas fa-home"></i> Hải Châu, Đà Nẵng</a></li>
						<li><a href="{{route('lien-he')}}"><i class="fas fa-phone"></i> 0971 505 345</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						@if(Auth::check())
						<li><a href=""><span class=" text-success">Xin chào {{Auth::user()->full_name}}</span></a></li>
						<li><a href="{{route('dang-xuat')}}">Đăng xuất</a></li>
						@else
						<li><a href="{{route('dang-ki')}}">Đăng kí</a></li>
						<li><a href="{{route('dang-nhap')}}">Đăng nhập</a></li>
						@endif
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('trang-chu')}}" id="logo"><img src="source/image/logo-shine.png" width="200px" alt="Logo nhãn hiệu"></a>
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
						<form role="search" method="GET" id="searchform" action="{{route('tim-kiem')}}">
							<input type="text" name="key_search" id="searchform" placeholder="Nhập từ khóa..." />
							<button class="fas fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>

					<div class="beta-comp">
						
						<div class="cart">
							<div class="beta-select"><i class="fas fa-cart-plus"></i>
							Giỏ hàng (
								<!-- xet dieu kien neu ton tai Session thi in so luong san pham, con k thi in 'trong' -->
								@if(Cart::count()>0){{Cart::count()}}
								@else trống
								@endif
								) <i class="fa fa-chevron-down"></i>
							</div>
							<div class="beta-dropdown cart-body">
							
								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Cart::subtotal()}}</span></div>
									<div class="clearfix"></div>
									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dat-hang')}}" class="beta-btn primary text-center"><i class="fa fa-chevron-left"></i>Đặt hàng </a>
										<a href="{{route('xem-gio')}}" class="beta-btn primary text-center">Xem giỏ <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
		<div class="header-bottom" style="background-color: #0277b8;">
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}">Trang chủ</a></li>
						<li><a href="{{route('loai-san-pham',2)}}"> Loại sản phẩm</a>
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)
								<li><a href="{{route('loai-san-pham',$loai->id)}}">{{$loai->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('gioi-thieu')}}">Giới thiệu</a></li>
						<li><a href="{{route('lien-he')}}">Liên hệ</a></li>
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->