@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Các sản phẩm {{$layten->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>{{$layten->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							@foreach($tenloai as $tenloai)
							<li><a href="{{route('loai-san-pham',$tenloai->id)}}">{{$tenloai->name}}</a></li>
							@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Danh sách các sản phẩm {{$layten->name}}</h4>
							<div class="beta-products-details">
								<p class="pull-left">Gồm có {{$sp_theoloai->total()}} sản phẩm </p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_theoloai as $sp)
								<div class="col-sm-4 mb10">
									<div class="single-item">
										@if($sp->promotion_price!=0)
										<!-- neu gia khuyen mai khac 0 thi hien thi chu sale tren dau hinh -->
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chi-tiet-san-pham',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->name}}</p>
											<p class="single-item-price">
											@if($sp->promotion_price==0)
												<span class="flash-sale">{{number_format($sp->unit_price,0,",",".")}}<u>đ</u></span>
											@else
												<span class="flash-del">{{number_format($sp->unit_price,0,",",".")}}<u>đ</u></span>
												<span class="flash-sale">{{number_format($sp->promotion_price,0,",",".")}}<u>đ</u></span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('them-vao-gio',$sp->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$sp->id)}}">Chi tiết<i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								
							</div>
							<div class="row">{{$sp_theoloai->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">Gồm có {{$sp_khac->total()}} sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_khac as $spk)
								<div class="col-sm-4 mb10">
									<div class="single-item">
										@if($spk->promotion_price!=0)
										<!-- neu gia khuyen mai khac 0 thi hien thi chu sale tren dau hinh -->
										<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										@endif
										<div class="single-item-header">
											<a href="{{route('chi-tiet-san-pham',$spk->id)}}"><img src="source/image/product/{{$spk->image}}" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$spk->name}}</p>
											<p class="single-item-price">
											@if($spk->promotion_price==0)
												<span class="flash-sale">{{number_format($spk->unit_price,0,",",".")}}<u>đ</u></span>
											@else
												<span class="flash-del">{{number_format($spk->unit_price,0,",",".")}}<u>đ</u></span>
												<span class="flash-sale">{{number_format($spk->promotion_price,0,",",".")}}<u>đ</u></span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
								<div class="row">{{$sp_khac->links()}}</div>
							</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection