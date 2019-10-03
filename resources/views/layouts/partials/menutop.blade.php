 <div class="menutop">
    <nav class="navbar navbar-light bg-faded mtop1">
     	<div class="container">
     		<div class="row">
     			<div class="col-sm-10">
     				<button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#mtop"> 
	      			</button>
		          <div class="collapse navbar-toggleable-xs " id="mtop">
		            <a class="navbar-brand" href="#">
		            	<img src="{{ asset('images/logo.png')}}">
		            </a>
		            	<div class="menu">
					        <ul class="nav navbar-nav mtopright">
					            <li class="nav-item">
					                <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
					            </li>
					            @foreach($categories as $cate)
					            <li class="nav-item">
					            	
					                <a class="nav-link" href="#">{{$cate->name}}</a>
					                	@if(count($cate->child)>0)
						                <ul>
											@foreach($cate->child as $subcate)
	                    					<li><a href="{{ route('categories.products', $subcate->id) }}">{{$subcate->name}}</a></li>
	                    					@endforeach
	                    					<!-- <li><a href="#">Lập trình Mobile</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li> -->
	                					</ul>
	                					@endif
					            </li>
					            @endforeach	
<!-- 					            <li class="nav-item">
    <a class="nav-link" href="#">Nữ</a>
						                <ul>
	                    					<li><a href="#">Lập trình web</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li>
	                					</ul>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Phụ kiện</a>
						                <ul>
	                    					<li><a href="#">Lập trình web</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li>
	                    					<li><a href="#">Lập trình Mobile</a></li>
	                					</ul>					                
</li>
<li class="nav-item">
    <a class="nav-link" href="#">Contact</a>
</li> -->
					            <li class="nav-item">
					                <a class="nav-link" id="search_hien" href="#" ><i class="fa fa-search"></i></a>
					            </li>
					        </ul>
		        		</div>
		           </div>
		           <form method="GET" class="" style="margin:-21px;box-shadow: unset;border: 0px;" action="{{ route('search') }}" id="search_mini_form" class="minisearch" autocomplete="off">
		           	<div class="search" id="search">
		                	<input type="text" class="form-control input_search" name="q" placeholder="Tìm kiếm..." required>
		            </div>
		        </form>
     			</div>
     			<div class="col-sm-2">
     					<div class="dropdown">
						  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 222px;
    margin-top: 32px;">
						    <i class="fa fa-shopping-cart"></i> Giỏ hàng ({{session('cart')!= Null ? Count(session ('cart')): 0}}) 
						  </button>
						  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="margin: 0;width: 221%;
">
						  		<div>
						  			<div class="row">
						  				<?php $total = 0 ?>
						  				@if(session('cart') != null)
						  				@foreach(session('cart') as $id => $details) 
				                         <?php $total += $details['price'] * $details['quantity'] ?>
				                        @endforeach
				                        @endif
						  				<div class="col-sm-12" style="margin-left: 7px">
						  					<span>Tổng đơn hàng:</span><br>
						  					<span style="margin-left: 35px;">{{number_format($total) }} VND</span>
						  				</div>
						  			</div>
						  			<br>
						  			<a href="{{ route('cart.show_checkout_form') }}" class="btn btn-outline-primary" style="margin-left: 60px;">Thanh toán</a>
						  		</div>
						  		<hr>
						  		@if(session('cart'))
                        		@foreach(session('cart') as $id => $details)
							    <div class="media">
							    	<div class="row">
							    		<div class="col-sm-3">
							    			<a class="pull-left" href="#"><img style="width: 67px; height: 73px; margin-left: 9px;"  src="{{ $details['image'] }}" alt=""></a>
							    		</div>
							    		<div class="col-sm-9">
							    			<div class="row">
												<div class="col-xs-10 danhsachsanpham">
													<span class="cart-item-title fontcart">{{ $details['name'] }}</span><br>
													<span class="cart-item-options">Size: {{ $details['size']['name'] }}<br> Color: {{ $details['color']['name'] }}</span><br>
													<span class="cart-item-amount">{{ $details['quantity'] }} * <span>{{number_format($details['price']) }} VND</span></span>
												</div>
												<div class="col-xs-2">
													<button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}" style="margin-top: 24px; margin-right: -24px;"><i class="fa fa-trash-o"></i></button>
												</div>
												</div>
							    		</div>	
							    	</div>
												
								</div>

								@endforeach
                    			@endif
								<hr>
								<div>
									<a href="{{route('cart')}}" class="btn btn-outline-primary" style="margin-left: 19px;">Xem và sửa giỏ hàng</a>
								</div>
						  </div>
					</div>
     			</div>

     		</div>
      		
     	</div> <!-- hết container -->
    </nav> <!-- hết mtop -->
 </div><!--  hết menutop -->
