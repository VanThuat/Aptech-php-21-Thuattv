<!-- Khu vực hiển thị sản phẩm -->


<h3 class="text-center">SẢN PHẨM NỔI BẬT</h3>
    <div class="container">
        <div class="row">
            @foreach ($homes as $home)
                <div class="col-md-3 col-xs-6 my-3 px-2">
                    
                    <img src="{{asset($home->img_path)}}" style="" class="img-fluid" alt="">
                    <h6 class="text-primary text-center" style="min-height:40px">{{$home->title}}</h6>
                    
                    <h5 class="text-success text-center">{{$home->price}}</h5>
                    
                    <div class="">
                        <a class="text-decoration-none" href="http://localhost:8000/products/{{$home->id}}">
                        <button class="btn btn-primary btn-block">
                        <i class="far fa-eye text-white"></i> Xem chi tiết</button>
                        </a>
                        <a class="mt-1" href="http://localhost:8000/addcart/{{$home->id}}">
                        <button class="btn btn-success btn-block"><i class="fas fa-cart-plus text-white"></i> Thêm vào giỏ</button>
                        </a>
                        
                    </div>
                    

                </div>
                
            @endforeach    
        </div>
    </div>
    <hr>