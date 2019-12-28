@extends('admin.adminmaster')
@section('content')
<div class="container">
            <div class="row">
                <div class="col-2">
                </div>
                <div class="col-10">
                    <div class="content-header">
                        <h3 class=" text-center">
                            Danh sách đơn hàng
                        </h3>
                    </div>
                    <!-- Main content -->
                    <section class="content">
                        @if (Session::has('message'))
                        <div class="alert alert-info"> {{ Session::get('message') }}</div>
                        @endif
                        <!-- Default box -->
                        <div class="box">
                            <div class="box-header with-border">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>ID</th>
                                                    <th class="sorting">Tên khách</th>
                                                    <th class="sorting">Địa chỉ</th>
                                                    <th>Email</th>
                                                    <th class="sorting">Ngày đặt hàng</th>
                                                    <th>Trạng thái</th>
                                                    <th class="sorting">Vào xem</th>
                                                    <th class="sorting">Xóa</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($customers as $customer)
                                                <tr>
                                                    <td>{{ $customer->id }}</td>
                                                    <td>{{ $customer->name }}</td>
                                                    <td>{{ $customer->address }}</td>
                                                    <td>{{ $customer->email }}</td>
                                                    <td>{{ $customer->created_at }}</td>
                                                    <td>
                                                        @if(1) Chưa xuất hàng
                                                        @else Đã xuất Hàng
                                                        @endif
                                                    </td>
                                                    <td><a href="{{ url('bill')}}/{{ $customer->id }}/edit">Chi tiết</a></td>
                                                    <td>
                                                        <form action="{{ url('bill')}}/{{ $customer->id }}" method="post">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                                                            <input type="submit" value="Xóa đơn" class="btn btn-danger">
                                                        </form>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
@endsection