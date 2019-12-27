@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>{{$sanpham->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4">
							@if($sanpham->promotion_price!=0)
							<div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
							@endif
							<div class="single-item-header">
								<a href="{{route('chi-tiet-san-pham',$sanpham->id)}}"><img src="source/image/product/{{$sanpham->image}}" alt="" height="250px"></a>
							</div>
						</div>
						<div class="col-sm-8">
							<div class="single-item-body">
								<p class="single-item-title">{{$sanpham->name}}</p>
								<p class="single-item-price">
									@if($sanpham->promotion_price==0)
									<span class="flash-sale">{{number_format($sanpham->unit_price,0,",",".")}}<u>đ</u></span>
									@else
									<span class="flash-del">{{number_format($sanpham->unit_price,0,",",".")}}<u>đ</u></span>
									<span class="flash-sale">{{number_format($sanpham->promotion_price,0,",",".")}}<u>đ</u></span>
									@endif
								</p>
							</div>

							<div class="clearfix"></div>
							<div class="space20">&nbsp;</div>

							<div class="single-item-desc">
								<p>{{$sanpham->description}}</p>
							</div>
							<div class="space20">&nbsp;</div>

							<p>Số lượng:</p>
							<div class="single-item-options">
								<select class="wc-select" name="color">
									<option>Số lượng</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
								<a class="add-to-cart" href="#"><i class="fa fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả sản phẩm</a></li>
							<li><a href="#tab-reviews">Phản hồi (0)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p>{{$sanpham->description}}</p>
							<p>{{$sanpham->description}}</p>
						</div>
						<div class="panel" id="tab-reviews">
							<p>Không có phản hồi nào</p>
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4>Sản Phẩm Cùng Loại</h4>

						<div class="row">
							@foreach($sp_cungloai as $sp)
							<div class="col-sm-4">
								<div class="single-item">
									@if($sp->promotion_price!=0)
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
										<a class="beta-btn primary" href="{{route('chi-tiet-san-pham',$sp->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
							@endforeach
							<div class="row">{{$sp_cungloai->links()}}</div>
						</div>
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
				
					<div class="widget">
						<h3 class="widget-title">Sản phẩm khuyến mãi</h3>
						@foreach($sanpham_khuyenmai as $km)
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chi-tiet-san-pham',$km->id)}}"><img src="source/image/product/{{$km->image}}" alt=""></a>
									<div class="media-body">
										{{$km->name}}
										@if($km->promotion_price==0)
											<span class="flash-sale">{{number_format($km->unit_price,0,",",".")}}<u>đ</u></span>
											@else
											<span class="flash-del">{{number_format($km->unit_price,0,",",".")}}<u>đ</u></span>
											<span class="flash-sale">{{number_format($km->promotion_price,0,",",".")}}<u>đ</u></span>
										@endif
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div> <!-- best sellers widget -->
					<div class="row">{{$sanpham_khuyenmai->links()}}</div>
				
					<div class="widget">
						<h3 class="widget-title">Sản phẩm mới</h3>
						@foreach($new_product as $new)
						<div class="widget-body">
							<div class="beta-sales beta-lists">
								<div class="media beta-sales-item">
									<a class="pull-left" href="{{route('chi-tiet-san-pham',$new->id)}}"><img src="source/image/product/{{$new->image}}" alt=""></a>
									<div class="media-body">
										{{$new->name}}
										@if($new->promotion_price==0)
											<span class="flash-sale">{{number_format($new->unit_price,0,",",".")}}<u>đ</u></span>
											@else
											<span class="flash-del">{{number_format($new->unit_price,0,",",".")}}<u>đ</u></span>
											<span class="flash-sale">{{number_format($new->promotion_price,0,",",".")}}<u>đ</u></span>
										@endif
									</div>
								</div>
							</div>
						</div>
						@endforeach
						<div class="row">{{$new_product->links()}}</div>
					</div> <!-- best sellers widget -->
					
				<!-- best sellers widget -->
				</div>
			</div>
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection