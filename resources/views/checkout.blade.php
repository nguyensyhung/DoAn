@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{ asset('css/ckeckout.css') }}">
<link rel="stylesheet" href="{{ asset('css/menucss.css') }}">
@endsection
@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="form_checkout_login">
				@guest
					<div class="ckeckout_info">
						<span>Bạn đã là thành viên?</span>
						<a href="#" class="showlogin">Kích vào đây để đăng nhập</a>
						<div class="check_login">
							<form class="check_login_css" action="{{ route('postlogin') }}" method="POST" >
								@csrf
								<div class="input_box">
									<label>Email <span style="color: red;">*</span></label>
									<input type="text" name="email" value="" class="diachi"> 
								</div>
								<div class="input_box">
									<label>Mật khẩu <span style="color: red;">*</span></label>
									<input type="password" class="diachi" name="password">
								</div>
								<div class="form_btn">
									<button type="submit" class="btn btn-primary btn_checkout"> Đăng nhập</button>
								</div>
							</form>
						</div>
					</div>

				@endguest	
			</div>
		</div>
	</div>
</div>
<div class="container">
	<form action="{{route('dathang')}}" method="post" id="order-form" class="form-control check_login_css">
		@csrf
		<div class="row">
			<div class="col-lg-6">
				@guest
					<h3>Thông tin đặt hàng</h3>
					<br>
					<div class="row">
						<div class="col-sm-6">
							<label>Họ <span style="color: red;">*</span></label>
							<br>
							<input class="ht" type="text" name="first_name">
							@if ($errors->has('last_name'))
                                <div class="has-error">
                                   <i>{{ $errors->first('last_name') }}</i>
                                </div>
                            @endif
						</div>
						<div class="col-sm-6">
							<label>Tên <span style="color: red;">*</span></label>
							<br>
							<input class="ht" type="text" name="last_name">
							@if ($errors->has('first_name'))
                                <div class="has-error">
                                   <i>{{ $errors->first('first_name') }}</i>
                                </div>
                            @endif							
						</div>
					</div>
					<div>
						<label>Địa chỉ Email <span style="color: red;">*</span></label>
						<br>
						<input type="text" name="email" class="diachi">
							@if ($errors->has('email'))
                                <div class="has-error">
                                   <i>{{ $errors->first('email') }}</i>
                                </div>
                            @endif						
					</div>
					<div class="row">
						<div class="col-sm-6">
							<label>Thành phố/tỉnh <span style="color: red;">*</span></label>
							<br>
							<select class="form-control ht" name="city_id" style="height: 45px">
								<option>Vui lòng chọn…</option>
		                          @foreach ($cities as $key => $value)
		                            <option value="{{$key}}">{{$value}}</option>
		                          @endforeach
		                    </select>
                            @if ($errors->has('city_id'))
                             <div class="has-error">
                                <i>{{ $errors->first('city_id') }}</i>
                             </div>
                            @endif		                    
						</div>
						<div class="col-sm-6">
							<label>Quận/huyện <span style="color: red;">*</span></label>
							<br>
							<select class="form-control ht" name="district_id" style="height: 45px">
								<option>Vui lòng chọn…</option>
		                    </select>
                            @if ($errors->has('district_id'))
                             <div class="has-error">
                                <i>{{ $errors->first('district_id') }}</i>
                             </div>
                            @endif			                    
						</div>
					</div>
					<div>
						<label>Địa chỉ cụ thể <span style="color: red;">*</span></label>
						<br>
						<input type="text" name="address" class="diachi" >
							@if ($errors->has('address'))
                                <div class="has-error">
                                   <i>{{ $errors->first('address') }}</i>
                                </div>
                            @endif							
					</div>
					<div>
						<label>Số điện thoại <span style="color: red;">*</span></label>
						<br>
						<input type="text" name="phone" class="diachi">
							@if ($errors->has('phone'))
                                <div class="has-error">
                                   <i>{{ $errors->first('phone') }}</i>
                                   <br>
                                </div>
                            @endif							
					</div>
					<div>
						<label>Mật khẩu <span style="color: red;">*</span> (để tạo tài khoản và giúp việc thanh toán trở nên dễ dàng hơn)</label>
						<br>
						<input type="password" name="password" class="diachi">
							@if ($errors->has('password'))
                                <div class="has-error">
                                   <i>{{ $errors->first('password') }}</i>
                                   <br>
                                </div>
                            @endif	
					</div>
				@else
					<div class="customer_details">
						<h4 class="font_h3">Chọn địa chỉ từ Sổ địa chỉ hoặc nhập địa chỉ mới</h4>
						<div class="input_box">
							<select class="form-control bg" name="address_id" style="height: 45px;">
								 @foreach($addresses as $address)
                                    @if ($address->id == old('address_id'))
                                        <option value="{{ $address->id }}" selected>{{ $address->last_name . ' ' . $address->first_name . ', ' . $address->address . ', ' . $address->district->name . ', ' . $address->city->name }}</option>
                                    @else
                                        <option value="{{ $address->id }}">{{ $address->last_name . ' ' . $address->first_name . ', ' . $address->address . ', ' . $address->district->name . ', ' . $address->city->name }}</option>
                                    @endif
                                @endforeach
                                @if (old('address_id') === "0")
                                    <option value="0" selected>Địa chỉ mới</option>
                                @else
                                    <option value="0">Địa chỉ mới</option>
                                @endif
							</select>
						</div>
					</div>
					<div class="customer_details mt--20 address-wrapper">
						@foreach($addresses as $address)
							<div class="asdfg-{{ $address->id }}" >
								<div class="row">
									<div class="col-sm-6">
										<label>Họ <span style="color: red;">*</span></label>
										<br>
										<input class="ht" type="text" name="first_name" value="{{ $address->first_name }}" disabled>
									</div>
									<div class="col-sm-6">
										<label>Tên <span style="color: red;">*</span></label>
										<br>
										<input class="ht" type="text" name="last_name" value="{{ $address->last_name }}" disabled>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-6">
										<label>Thành phố/tỉnh <span style="color: red;">*</span></label>
										<br>
										<input type="text" value="{{ $address->city->name }}" disabled class="ht">
									</div>
									<div class="col-sm-6">
										<label>Quận/huyện <span style="color: red;">*</span></label>
										<br>
										<input type="text" value="{{$address->district->name }}" disabled  class="ht" >
									</div>
								</div>
								<div>
									<label>Địa chỉ cụ thể <span style="color: red;">*</span></label>
									<br>
									<input type="text" name="address" class="diachi" value="{{ $address->address }}" disabled >
								</div>
								<div>
									<label>Số điện thoại <span style="color: red;">*</span></label>
									<br>
									<input type="text" name="phone" class="diachi" value="{{ $address->phone }}" disabled>
								</div>
							</div>
						@endforeach
						<div class="hjkl"  >
						<hr>
						<h4 class="font_h3">Địa chỉ mới</h4>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<label>Họ <span style="color: red;">*</span></label>
								<br>
								<input class="ht" type="text" name="first_name">
							@if ($errors->has('first_name'))
                                <div class="has-error">
                                   <i>{{ $errors->first('first_name') }}</i>
                                   <br>
                                </div>
                            @endif									
							</div>
							<div class="col-sm-6">
								<label>Tên <span style="color: red;">*</span></label>
								<br>
								<input class="ht" type="text" name="last_name">
							@if ($errors->has('last_name'))
                                <div class="has-error">
                                   <i>{{ $errors->first('last_name') }}</i>
                                   <br>
                                </div>
                            @endif	
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<label>Thành phố/tỉnh <span style="color: red;">*</span></label>
								<br>
								<select class="form-control ht" name="city_id" style="height: 45px">
									<option>Vui lòng chọn…</option>
									    @foreach ($cities as $key => $value)
									        <option value="{{$key}}">{{$value}}</option>
									    @endforeach
								</select>
                            @if ($errors->has('city_id'))
                             <div class="has-error">
                                <i>{{ $errors->first('city_id') }}</i>
                             </div>
                            @endif									
							</div>
							<div class="col-sm-6">
								<label>Quận/huyện <span style="color: red;">*</span></label>
								<br>
								<select class="form-control ht" name="district_id" style="height: 45px">
									<option>Vui lòng chọn…</option>
								</select>
							@if ($errors->has('district_id'))
                             <div class="has-error">
                                <i>{{ $errors->first('district_id') }}</i>
                             </div>
                            @endif	
							</div>
						</div>
						<div>
							<label>Địa chỉ cụ thể <span style="color: red;">*</span></label>
							<br>
							<input type="text" name="address" class="diachi" >
							@if ($errors->has('address'))
                                <div class="has-error">
                                   <i>{{ $errors->first('address') }}</i>
                                   <br>
                                </div>
                            @endif								
						</div>
						<div>
							<label>Số điện thoại <span style="color: red;">*</span></label>
							<br>
							<input type="text" name="phone" class="diachi">
							@if ($errors->has('phone'))
                                <div class="has-error">
                                   <i>{{ $errors->first('phone') }}</i>
                                   <br>
                                </div>
                            @endif								
						</div>
						</div>
					</div>
				@endguest	
			</div>
			<div class="col-lg-6">
				<h3>Đơn hàng của bạn</h3>
				<br>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Sản phẩm</th>
							<th>Số lượng</th>
							<th>Thành tiền</th>
						</tr>
					</thead>
					<tbody>
						<?php $total = 0 ?>
			        	@if(session('cart'))
			            @foreach(session('cart') as $id => $details)
			            <?php $total += $details['price'] * $details['quantity'] ?>
						<tr>
							<td>
								{{ $details['name'] }}
							</td>
							<td>{{ $details['quantity'] }}</td>
							<td>{{number_format($details['price'] * $details['quantity'])}} VND</td>
						</tr>
					</tbody>
					    @endforeach
	        			@endif
					<tfoot>
			            <tr class="visible-xs">
			                <td class="text-center" name="total"><strong>Thành tiền: {{number_format( $total) }} VND</strong>
							
			                </td>
			            </tr>
			            <tr>
			                <td colspan="2" class="hidden-xs"></td>
			                <td class="hidden-xs text-center"><a href="#" class="btn btn-outline-secondary btn-order-submit"> Xác nhận đơn hàng</a></strong></td>
			            </tr>
	        		</tfoot>
				</table>

			</div>
	</div>
	</form>
</div>
<br>
@endsection
@section('script')
    <script>
        jQuery().ready(function ($) {
            $('select[name="city_id"]').on('change', function (event) {
                event.preventDefault();

                $city_id = $(this).val();
                var districts = '';
                
                $.ajax({
                    url: '/api/v1/cities/' + $city_id + '/districts',
                    type: 'GET',
                    success: function(response) {
                        $.each(response, function(index, value) {
                            districts += '<option value="' + value['id'] + '">' + value['name'] + '</option>'
                        });

                        $('select[name="district_id"]').html(districts);
                    }
                });
            });

            $('.btn-order-submit').on('click', function(e) {
            	e.preventDefault();
            	$('#order-form').submit();
            })
        })
    </script>
    <script>
		$('.check_login').slideUp();

		$('.ckeckout_info a').click(function(event) {
	
			$(this).next().slideToggle();
		});
    </script>

    <script>

    	jQuery(document).ready(function($) {
    	$('.hjkl').slideUp();

    	var address = $('select[name="address_id"]');
    	
    	if (address.val() == 0) {
                $('.hjkl').slideToggle(200);
        } 
        else{
                $('.address-' + address.val()).slideToggle(200);
            }

    	address.on('change', function(event) {
                event.preventDefault();
                /* Act on the event */

                if ($(this).val() == 0) {
                    $('.address-wrapper').children().slideUp(200);
                    $('.hjkl').delay(200).slideDown(200);
                } else {
                    $('.address-wrapper').children().slideUp(200);
                    $('.asdfg-'+ $(this).val()).delay(200).slideDown(200);
                }
            });
	
		/*$('.hjkl').slideUp();


		if
		$('.ckeckout_info a').click(function(event) {
	
			$(this).next().slideToggle();
		});*/
});
    </script>

    <script type="text/javascript">


        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Bạn có chắc muốn xóa sản phẩm này!")) {
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