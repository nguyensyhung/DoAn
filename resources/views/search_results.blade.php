@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/menucss.css')}}">
@endsection
@section('content')
<br>
<!-- Phần product -->
 <div  class="headerproduct">
 	<div class="container">
 		<div class="row">
 			<!-- <div class="col-sm-8" id="gachduoi"> 
 				<ul>
 					<li><a class="gachduoi" href="#"  data-danhmucanh="all">Tất cả các sản phẩm</a></li>
 					<li><a href="#" data-danhmucanh=".nam">Style Nam</a></li>
 					<li><a href="#" data-danhmucanh=".nu">Style Nữ</a></li>
 					<li><a href="#" data-danhmucanh=".phu-kien">Phụ kiện</a></li>
 				</ul>
 			</div> -->
<!--  			<div class="col-sm-4 icon1">
	<a href="" class="btn btn-outline-secondary"><i class="fa fa-filter"></i> Filter</a>
	<a href="" class="btn btn-outline-secondary"><i class="fa fa-search"></i> Search</a>
</div> -->
      <!-- <ul class="nav">
          <li><a href="#">Shop</a></li>
          <li>
              <a href="#">Đồ Nam</a>
              <ul class="sub-menu">
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">Đồ nam</a></li>
                  <li><a href="#">Đồ nữ</a></li>
                  <li><a href="#">Phụ kiện</a></li>
              </ul>
          </li>
          <li>
            <a href="#">Đồ nữ</a>
            <ul class="sub-menu">
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">Đồ nam</a></li>
                  <li><a href="#">Đồ nữ</a></li>
                  <li><a href="#">Phụ kiện</a></li>
            </ul>
          </li>
          <li>
            <a href="#">Phụ kiện</a>
            <ul class="sub-menu">
                  <li><a href="#">Shop</a></li>
                  <li><a href="#">Đồ nam</a></li>
                  <li><a href="#">Đồ nữ</a></li>
                  <li><a href="#">Phụ kiện</a></li>
            </ul>
          </li>
      </ul> -->
 		</div>
 	</div>
 </div>
 <div class="bodyproduct">
	<div class="container">
 	<div class="row">
 		<div class="col-sm-3" id="gachduoi">
 			<ul class="matcham"><li><a class="gachduoi afornt" href="#"  data-danhmucanh="all">Shop Thời trang</a></li></ul>
 			<ul class="list-group list-group-flush">
			  <li class="list-group-item active"><a href="" data-danhmucanh="" style="color:white; text-transform: uppercase;  text-decoration: none;">Đồ nam</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".ao-so-mi">&nbsp;&nbsp;&nbsp;&nbsp;Áo sơ mi</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".ao-phong">&nbsp;&nbsp;&nbsp;&nbsp;Áo phông</a></li>
			  <li class="list-group-item"><a class="listgroup" href=""  data-danhmucanh=".quan-tay">&nbsp;&nbsp;&nbsp;&nbsp;Quần tây</a></li>
			  <li class="list-group-item"><a class="listgroup" href=""data-danhmucanh=".quan-short">&nbsp;&nbsp;&nbsp;&nbsp;Quần Short</a></li>
			  <li class="list-group-item active"><a href="" data-danhmucanh=".nu" style="color:white; text-transform: uppercase;  text-decoration: none;">Đồ Nữ</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".dam-da-hoi">&nbsp;&nbsp;&nbsp;&nbsp;Đầm dạ hội</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".vay-ngan">&nbsp;&nbsp;&nbsp;&nbsp;Váy ngắn</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".quan-ni">&nbsp;&nbsp;&nbsp;&nbsp;Quần nỉ</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".quan-jeans">&nbsp;&nbsp;&nbsp;&nbsp;Quần Jeans</a></li>
			  <li class="list-group-item active"><a href="" data-danhmucanh=".phu-kien" style="color:white; text-transform: uppercase;  text-decoration: none;">Phụ kiện</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".dong-ho">&nbsp;&nbsp;&nbsp;&nbsp;Đồng hồ</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".balo-cheo">&nbsp;&nbsp;&nbsp;&nbsp;balo chéo</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".kinh-dam">&nbsp;&nbsp;&nbsp;&nbsp;Kính dâm</a></li>
			  <li class="list-group-item"><a class="listgroup" href="" data-danhmucanh=".ao-phong">&nbsp;&nbsp;&nbsp;&nbsp;dây nịt</a></li>
			</ul>
 		</div> <!-- end row 4 -->
 		<div class="col-sm-9">
 			<div class="row content">
 				@foreach($products as $product)
					<div class="col-sm-4 khoi1 {{$product->category->slug}}">
		 				<img class="phongto" src="{{$product->images[0]->path}}" >
		 				<a class="ser" href="#product-{{$product->id}}" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="{{ url('add-to-cart/'.$product->id) }}"><i class="fa fa-cart-plus"></i></a>
		 				<a href="{{route('products.show',$product->id)}}">{{$product->name}}</a>
		 				<p style="color: black;">{{ number_format($product->price) }} đ</p>
		 			</div>
		 		@endforeach

		 			<!-- <div class="col-sm-4 khoi1 nu">
		 				<img src="images/product-02.jpg" >
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 nam">
		 				<img src="images/product-11.jpg">
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 nu">
		 				<img src="images/product-04.jpg" >
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 nu">
		 				<img src="images/product-05.jpg" >
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 nam">
		 				<img src="images/product-03.jpg">
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 phu-kien">
		 				<img src="images/product-06.jpg">
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 phu-kien">
		 				<img src="images/product-09.jpg">
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 phu-kien">
		 				<img src="images/product-12.jpg">
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div>
		 			<div class="col-sm-4 khoi1 phu-kien">
		 				<img src="images/product-15.jpg">
		 				<a class="ser" href="#modal-3" data-toggle="modal"><i class="fa fa-search"></i></a>
		 				<a class="cartplus" href="#"><i class="fa fa-cart-plus"></i></a>
		 				<a href="">Áo Nữ Mùa Hè</a>
		 				<p style="color: black;">15.000 đ</p>
		 			</div> -->
 			</div>
    <br>
 		</div> <!-- end row 8 -->
 	</div> 
</div>
</div>
 	<br>
	<hr>
	@foreach($products as $product)
  				<div class="modal fade" id="product-{{ $product->id }}">
   						<div class="modal-dialog modal-lg" role="document">
    					<div class="modal-content">
     						<!-- Modal Header -->
     					<div class="modal-header">
      						<button type="button" class="close" data-dismiss="modal">×</button>
    					</div>
    					<div class="modal-body">
      						<div class="row">
      							<div class="col-sx-6 left">
      								<img src="{{$product->images[0]->path}}">
      							</div>
      							<div class="col-sx-6 right">
      								<h4>{{$product->name}}</h4>
      								<span>{{number_format($product->price)}} VND</span>
      								<p class="noidungtext">{{$product->description}}</p>
                        <form style="margin: 0; box-shadow: unset; border: 0px;" class="form-control" method="POST" action="{{ route('add_to_cart') }}">
                          @csrf
                          <div class="container">
                            <div class="row">
                                <div class="col-sx-4">
                                  <div class="name"> Size </div>
                                </div>
                                <div class="col-sx-8 select1">
                                  <div class="select">
                                    <select class="js-select" name="size_id">
                                      <option>Choose an option</option>
                                      @foreach ($product->sizes as $size)
                                        <option value="{{ $size->id }}">{{ $size->name }}</option>
                                      @endforeach
                                    </select>
                                      <div class="dropDownSelect2"></div>
                                  </div>
                                </div>
                            </div>
                          </div>

                          <div class="container">
                            <div class="row">
                                <div class="col-sx-4">
                                  <div class="name"> Color </div>
                                </div>
                                <div class="col-sx-8 select2">
                                  <div class="select">
                                    <select class="js-select" name="color_id">
                                      <option>Choose an option</option>
                                      @foreach ($product->colors as $color)
                                        <option value="{{ $color->id }}">{{ $color->name }}</option>
                                      @endforeach
                                    </select>
                                      <div class="dropDownSelect2"></div>
                                  </div>
                                </div>
                            </div>
                          </div>

                          <div class="container">
                            <div class="row">
                                <div class="col-sx-4">
                                  <div class="name"> So luong </div>
                                </div>
                                <div class="col-sx-8 select3">
                                  <div class="lui1">
                                      <i class=""></i>
                                  </div>

                                  <input style="margin-left: 34px;margin-top: 70px;" class="inputsl" type="number" name="quantity" value="1">
                                  <div class="tien1">
                                      <i class=""></i>
                                  </div>
                                </div>  
                            </div>
                          </div>

                          <div class="container">
                            <div class="row">
                              <input type="hidden" name="id" value="{{ $product->id }}">
                              <button type="submit" class="btn-outline-info but">
                                Add to cart
                              </button>
                            </div>
                          </div>
                        </form>
        						</div>
      						</div>
    					</div>
  					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
      @endforeach
@endsection
@section('script')


    <script type="text/javascript">

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Bạn có chắc muốn xóa sản phảm này tại giỏ hàng?")) {
                $.ajax({
                    url: '{{ url('remove-from-cart') }}',
                    method: "DELETE",
                    data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>

@endsection