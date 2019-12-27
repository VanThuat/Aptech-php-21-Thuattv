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
                        <h3 class="breadcrumb">
                            Danh sách đơn hàng
                        </h3>
                    </section>
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
                                                    <th class="sorting">Chi tiết</th>
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
                                                    <td>Chưa xử lý</td>
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
    </body>
</html>