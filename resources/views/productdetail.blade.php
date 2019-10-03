@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/productdetail.css') }}">
<link rel="stylesheet" href="{{ asset('css/menucss.css') }}">
@endsection
@section('content')
<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-9">
				<div class="row">
					<div class="col-lg-6">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
							<ol style="" class="carousel-indicators">
								<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
								<li data-target="#carousel-example-generic" data-slide-to="1"></li>

							</ol>
							<div class="carousel-inner" role="listbox">
								@if (!empty($product->images))
                                                <div class="carousel-item active">
												<img src="{{$product->images[0]->path}}" alt="First slide">
												</div>
												<div class="carousel-item">
													<img src="{{$product->images[1]->path}}" alt="First slide">
												</div>
                                @endif
								
								<!-- <div class="carousel-item">
									<img src="{{asset('images/product-01.jpg')}}" alt="First slide">
								</div>
								<div class="carousel-item">
									<img src="{{asset('images/product-03.jpg')}}" alt="First slide">
								</div> -->
							</div>
							<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
								<span class="icon-prev" aria-hidden="true"></span>
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
								<span style="left: 522px;" class="icon-next" aria-hidden="true"></span>
								<span class="sr-only">Next</span>
							</a>
						</div>
					</div>
					<div class="col-lg-6">
						<h3>{{$product->name}}</h3>
						<h2>{{number_format($product->price)}} VND</h2>
						<p style="color: black;">{!!$product->description!!}</p>
						<form style="margin: 0; box-shadow: unset; border: 0px;" class="form-control" method="POST" action="{{ route('add_to_cart')}}">
                          @csrf
                          <div class="container">
                            <div class="row">
                                <div class="col-sx-2">
                                  <div class="size">Size</div>
                                </div>
                                <div class="col-sx-10 select1">
                                  <div class="select">
                                    <select class="js-select" name="size_id">
                                      <option>Chọn kích thước</option>
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
                                  <div class="size">Màu </div>
                                </div>
                                <div class="col-sx-8 select2">
                                  <div class="select">
                                    <select class="js-select" name="color_id" style="margin-left: 6px;">
                                      <option>Chọn màu sắc</option>
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
                                  <div class="size"> Số lượng </div>
                                </div>
                                <div class="col-sx-8 select3">
                                  <input style="margin-left: -108px;margin-top: 121px;" class="inputsl" type="number" name="quantity" value="1">
                                </div>  
                            </div>
                          </div>
						
                          <div class="container">
                            <div class="row">
                              <input type="hidden" name="id" value="{{ $product->id }}">
                              <button style="margin-left: 192px; width: 175px;" type="submit" class="btn-outline-info but">
                                Thêm vào giỏ hàng
                              </button>
                            </div>
                          </div>
                        </form>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-lg-12">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Chi tiết</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Đánh giá</a>
						  </li>
						</ul>
						<div class="tab-content" id="myTabContent">
<!-- 						  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua.
</div> -->
						  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						  	<div class="container">
						  		<br>
								
									@foreach ($comments as $comment)
									<div class="review-block-title"><p class="thongtin">{{ $comment->title }}</p></div>
									<div class="review-block-description">{!! $comment->content !!}</div>
									<br>
									<div class="row">
										<div class="col-sx-6" style="margin-top: 15px;">
											<div class="review-block-rate">
												<div class="row">
													<div class="col-sx-3">
														<h5 >Chất lượng : &nbsp;&nbsp;</h5>
													</div>
													<div class="col-sx-9" style="margin-top: -7px;">
														@for ($i = 0; $i < $comment->rating_quality; $i++)
														<button type="button" class="btn btn-warning btn-xs" aria-label="Left Align">
														  <span class="glyphicon glyphicon-star" aria-hidden="true"><i class="fa fa-star"></i></span>
														</button>
														@endfor
														@for ($i = 0; $i < 5 - $comment->rating_quality; $i++)
														<button type="button" class="btn btn-default btn-grey btn-xs" aria-label="Left Align">
														  <span class="glyphicon glyphicon-star" aria-hidden="true"><i class="fa fa-star"></i></span>
														</button>
														@endfor
													</div>
												</div>
											</div>
										</div>
										<div class="col-sx-6 " style="margin-left: 130px;">
											<p class="thongtin">Nhận xét bởi :{{ $comment->nickname }}</p>
											<p class="thongtin">Vào ngày : {{ date_format($comment->created_at, 'd/m/Y') }}</p>
										</div>
									</div>
								
						  		<hr>
						  		@endforeach
						  		@guest
                                        <h3>Chỉ có thành viên mới có thể viết nhận xét!</h3>
								@else
						  		<form method="POST" action="{{ route('comments.store') }}" style="margin: 0; box-shadow: unset; border: 0px;" class="form-control">
						  			@csrf
						  			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
							  		<div class="row">
							  			<div class="col-lg-3">
							  				<h2 style="margin-top: 20px">Chất lượng</h2>
							  			</div>
							  			<div class="col-lg-9">
								  			<div class="rating" >
										      <input type="radio" id="star10" name="rating_quality" value="5" /><label for="star10" title="Rocks!">5 stars</label>
										      <input type="radio" id="star9" name="rating_quality" value="4" /><label for="star9" title="Rocks!">4 stars</label>
										      <input type="radio" id="star8" name="rating_quality" value="3" /><label for="star8" title="Pretty good">3 stars</label>
										      <input type="radio" id="star7" name="rating_quality" value="2" /><label for="star7" title="Pretty good">2 stars</label>
										      <input type="radio" id="star6" name="rating_quality" value="1" /><label for="star6" title="Meh">1 star</label>								      
										    </div>
							  			</div>						
							  		</div>
						  			<h3>Thông tin đánh giá: </h3>
									<br>
									<div>
										<label>Biệt danh <span style="color: #e02b27">*</span></label>
										<br>
										<input type="text" name="nickname" class="diachi">
									</div>
									<div>
										<label>Tiêu đề <span style="color: #e02b27">*</span></label>
										<br>
										<input type="text" name="title" class="diachi">
									</div>
									<div>
										<label>Nhận xét <span style="color: #e02b27">*</span></label>
										<br>
										<textarea class="form-control" rows="5" id="content" name="content"></textarea>
									</div>
						  			<button href="" type="submit" class="btn btn-default nut">Gửi nhận xét</button>
						  		</form>
						  		@endguest
						  	</div>
						  </div>
						</div>
					</div>
				</div>			
			</div>
			<div class="col-lg-3">
	 			<ul class="list-group list-group-flush">
				  <li class="list-group-item active"><a href="" data-danhmucanh="" style="color:white; text-transform: uppercase;  text-decoration: none;">Danh mục liên quan</a></li>
				  @foreach ($related_categories as $category)
                    <li class="list-group-item"><a class="listgroup" href="{{ route('categories.products', $category->id) }}" data-danhmucanh=".ao-so-mi">&nbsp;&nbsp;&nbsp;&nbsp;{{$category->name}}</a></li>
                  @endforeach
				  
				</ul>
			</div>
		</div>
	</div>
@endsection

@if (Auth::check())
@section('script')
<script src="{{ asset('ckeditor/ckeditor.js')}}"></script>
<script>
	config = {};
	config.entities_latin = false;
    CKEDITOR.replace( 'content', config);
</script>
@endsection
@endif