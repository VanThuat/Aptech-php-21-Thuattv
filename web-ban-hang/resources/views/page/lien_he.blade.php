@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Thông tin liên hệ</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
</div>
<div class="container">
	<div class="abs-fullwidth beta-map wow flipInX">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.7175686087808!2d108.21450531433683!3d16.080139343417866!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421838dc3140ad%3A0x1a4a165af1276323!2zNDAgxJDhuqdtIFJvbmcgMiwgSOG6o2kgQ2jDonUsIMSQw6AgTuG6tW5nIDU1MDAwMCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1576947483501!5m2!1svi!2s"
			frameborder="1" style="border:1;" allowfullscreen="">
		</iframe>
	</div>
</div>
<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Thông tin khách hàng</h2>
					<div class="space20">&nbsp;</div>
					<p>Nếu quý khách có bất kỳ thông tin hay vấn đề nào cần liên hệ, tư vấn với chúng tôi,
						xin hãy vui lòng điền thông tin vào bảng dưới và ghi nội dung cần chúng tôi hồi đáp.
						Chúng tôi sẽ liên hệ lại cho quý khách sớm nhất có thể</p>
						<p>Xin chân thành cảm ơn đã tin tưởng và sử dụng.</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Tên của bạn">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Mail của bạn">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="Chủ đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" rows="3" cols="40" placeholder="Nội dung..."></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi tin nhắn <i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>Thông tin về chúng tôi</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Văn phòng đại diện</h6>
					<p>
						Người đại diện: Trần Văn Thuật<br>
						<i class="fas fa-phone-volume mr-2"></i><span class="text-danger"> : 0971 505 345</span><br>
						<i class="fas fa-home pr-2"></i><span class="text-danger"> : 0123 456 789 </span><br>
						<a href="shinebeauty@gmail.com"><i class="fas fa-envelope mr-1"></i></span class=" text-success"> : shinebeauty@gmail.com</span></a> <br>
						<a href="www.shinebeauty.com.vn"><i class="fas fa-globe-asia"></i><span class=" text-success"> : www.shinebeauty.com.vn</span> <br></a>
						Địa chỉ: Hải Châu - Đà Nẵng
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Hệ thông đại lý</h6>
					<p> - Đại lý phía Băc: 123 Đống Đa - Ba Đình - Hà Nội <br>
					<i class="fas fa-phone-volume mr-2"></i><span class="text-danger"> : 0123 321 123</span> <br>
						- Đại lý miền trung: 123 Đống Đa - Thuận Thành - Huế <br>
						<i class="fas fa-phone-volume pr-2"></i><span class="text-danger"> : 0123 456 654</span> <br>
						- Đại lý miền Nam: 123 Đống Đa - Quận 1 - HCM <br>
						<i class="fas fa-phone-volume"></i><span class="text-danger"> : 0123 234 345</span> <br>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">Tư vấn mua hàng</h6>
					<p>
						Nếu bạn cần tư vấn hay gặp vấn đề khi mua hàng, xin vui lòng liên hệ vào mail dưới đây <br>
						<a href="shinebeauty@gmail.com"><i class="fas fa-envelope"></i><span class=" text-success"> : shinebeauty@gmail.com</span></a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
</div> <!-- .container -->
@endsection