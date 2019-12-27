@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng kí</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Đăng kí</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
			<form action="{{route('dang-ki')}}" method="POST" class="beta-form-checkout">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="row">
					<div class="col-sm-3"></div>
					@if(count($errors)>0)
					<div class="aler aler-success">
						@foreach($errors->all() as $errors)
						{{$errors}}
						@endforeach
					</div>
					@endif
					@if(Session::has('msg'))
					<div> <h4 class="aler aler-success">{{Session::get('msg')}}</h4></div>
					@endif
					<div class="col-sm-6">
						<h5>Vui lòng điền đầy đủ thông tin vào bảng</h5>
						<div class="space20">&nbsp;</div>
						
						<div class="form-block">
							<label for="email">Địa chỉ mail*</label>
							<input name="email" type="email" id="email" required>
						</div>

						<div class="form-block">
							<label for="your_last_name">Họ và tên*</label>
							<input name="fullname" type="text" id="your_last_name" required>
						</div>

						<div class="form-block">
							<label for="adress">Địa chỉ*</label>
							<input name="address" type="text" id="adress" placeholder="Nhập địa chỉ..." required>
						</div>

						<div class="form-block">
							<label for="phone">Số điện thoại*</label>
							<input name="phone" type="text" id="phone" required>
						</div>
						<div class="form-block">
							<label for="phone">Mật khẩu*</label>
							<input name="password" type="password" id="phone" required>
						</div>
						<div class="form-block">
							<label for="phone">Nhập lại mật khẩu*</label>
							<input name="repassword" type="password" id="phone" required>
						</div>
						<div class="form-block">
							<button type="submit" class="btn btn-primary">Đăng kí</button>
						</div>
					</div>
					<div class="col-sm-3"></div>
				</div>
			</form>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection