<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bill Management</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.css">
</head>
<body>
<div class="container">
    <div class="row">
    <div class="col-2">
    @include('sidebar-admin')
    </div>
    <div class="col-10">
        <section class="content-header">
            <h1>
                Chi tiết đơn hàng
            </h1>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="{{asset('bill')}}" title="Danh sách đơn">Danh sách đơn hàng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết đơn hàng</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <!-- Default box -->
            <div class="box">
                <div class="box-header with-border">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="container123  col-md-6"   style="">
                                
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th class="col-md-4">Thông tin khách hàng</th>
                                        <th class="col-md-6">Chi tiết</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Tên người đặt hàng</td>
                                        <td>{{ $customerInfo->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Ngày đặt hàng</td>
                                        <td>{{ $customerInfo->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Số điện thoại</td>
                                        <td>{{ $customerInfo->phone_number }}</td>
                                    </tr>
                                    <tr>
                                        <td>Địa chỉ</td>
                                        <td>{{ $customerInfo->address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $customerInfo->email }}</td>
                                    </tr>
                                    <tr>
                                        <td>Lưu ý</td>
                                        <td>{{ $customerInfo->note }}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <table id="myTable" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                <thead>
                                <tr role="row">
                                    <th>STT</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Số lượng</th>
                                    <th>Giá tiền</th>
                                </thead>
                                <tbody>
                                @foreach($billInfo as $key => $bill)
                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $bill->product_name }}</td>
                                        <td>{{ $bill->quantity }}</td>
                                        <td>{{ number_format($bill->unit_price) }}.000 <u>đ</u></td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td class=" text-center" colspan="3"><b>Tổng tiền</b></td>
                                    <td colspan="1"><b class="text-red">{{ $bill->total }}0 <u>đ</u></b></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form action="{{ url('bill') }}/{{ $customerInfo->id_bill }}" method="POST">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="row">
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <div class="form-inline">
                                        <label for="status" class="mb-1">Trạng thái giao hàng:  </label>
                                        <select name="status" id="status" class="form-control input-inline" style="width: 150px">
                                            <option value="1">Chưa giao</option>
                                            <option value="2">Đang giao</option>
                                            <option value="2">Đã giao</option>
                                        </select>
                                        <input type="submit" value="Xử lý" class="btn btn-primary">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <br><br><br>
        </section>
    </div>
</div>

</div>


</body>
</html>