 <div class="topheader" style="padding-bottom: 10px;">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
  				<div class="iconsocial">
  					<a href="#"><i class="fa fa-facebook"></i></a>
  					<a href="#"><i class="fa fa-twitter"></i></a>
  					<a href="#"><i class="fa fa-pinterest"></i></a>
  					<a href="#"><i class="fa fa-google-plus"></i></a>
  					<a href="#"><i class="fa fa-wordpress"></i></a>
  					<a href="#"><i class="fa fa-instagram"></i></a>
  					<a href="#"><i class="fa fa-tumblr"></i></a>
  					<a href="#"><i class="fa fa-tree"></i></a>
  				</div>
  			</div>
  			<div class="col-sm-4">
          @guest
  				<div class="nut">
  					<a href="#modal-2" class="btn btn-outline-secondary btn-sm " data-toggle="modal" >Đăng ký</a>
  					<div class="modal fade " id="modal-2">
             			<div class="modal-dialog" role="document">
              				<div class="modal-content">
               					<div class="modal-body">
                					<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 50px;">
                 					<span aria-hidden="true">&times;</span>
                 					<!-- <span class="sr-only">Close</span> -->
               						</button>
               						<form method="POST" action="{{route('dangki')}}" >
                            @csrf
                 						<h1>Đăng ký</h1>
						                 <input class="dkdn" placeholder="Họ" type="text" name="first_name" required="">
						                 <input class="dkdn" placeholder="Tên" type="text" name="last_name" required="">
						                 <input class="dkdn" placeholder="Email" type="email" name="email" required="">
						                 <input class="dkdn" placeholder="Password" type="password" name="password" required="">
						                 <input class="dkdn" placeholder="Xác nhận password" type="password" name="re_password"  required="">
						                 <button class="sub" type="submit">Đăng ký</button>
						            </form>
             					</div>
           					</div><!-- /.modal-content -->
         				</div><!-- /.modal-dialog -->
       				</div><!-- /.modal -->
       				<a href="#modal-1" class="btn btn-secondary btn-sm" data-toggle="modal">Đăng nhập</a>
       				<div class="modal fade " id="modal-1">
         				<div class="modal-dialog" role="document">
          					<div class="modal-content">
           						<div class="modal-body">
            						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="width: 50px;">
             						<span aria-hidden="true">&times;</span>
             						<span class="sr-only">Close</span>
           							</button>
						           <form action="{{ route('postlogin') }}" method="POST" >
                        @csrf
						             	<h1>Đăng nhập</h1>
						             	<input class="dkdn" id="email" name="email" placeholder="Username" type="text" required="" value="{{old('email')}}">
                          @if($errors->has('email'))
                          <p style="color: red;">{{$errors->first('email')}}</p>
                          @endif
						             	<input class="dkdn" id="password" name="password" placeholder="Password" type="password" required="">
                          @if($errors->has('password'))
                          <p style="color: red;">{{$errors->first('password')}}</p>
                          @endif
						            	 <div class="row">
						              		<div class="col-xs-6">
						               			<input id="remember" name="remember" type="checkbox">
						               			<label class="me" for="remember">Remember Me</label>
						             		</div>
						             		<div class="col-xs-6">
						               			<h6><a href="#">Forgot Password?</a></h6>
						             		</div>
						           		</div>
						           			<button id="dang-nhap" class="sub"  type="submit">Submit</button>
						         	</form>
       							</div>
     						</div><!-- /.modal-content -->
   						</div><!-- /.modal-dialog -->
 					</div><!-- /.modal -->
          @else
 					<!-- @guest
          <ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle user" data-toggle="dropdown" href="#"><i class="fa fa-user"></i><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                              <li><a href="#modal-1" data-toggle="modal">Đăng nhập</a></li>
                              <li><a href="#modal-2" data-toggle="modal">Đăng ký</a></li>
                              <li><a href="#">Quên mật khẩu</a></li>
                            </ul>
                          </li>
                      </ul>  
                    @else  -->
						<ul class="nav navbar-nav">
            <li class="dropdown"><a class="dropdown-toggle user" data-toggle="dropdown" href="#">{{Auth::user()->first_name}}<span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    @if (Auth::user()->role->name == 'admin' || Auth::user()->role->name == 'sale')
                            <li><a href="{{ route('admin.dashboard') }}">Quản trị viên</a></li>
                    @endif                  
                    <li><a  href="{{route('account.addresses')}}">Tài khoản</a></li>
                    <li><a id="btn-logout" href="#">Đăng  xuất</a></li>
                  </ul>
                </li>
            </ul> 
						<form id="form-logout" style="margin:-21px;box-shadow: unset;border: 0px;" action="{{ route('logout') }}" method="POST">@csrf</form>
				<!--   @endguest -->
          @endguest
  				</div>
          
  			</div> 
		</div>
	</div>
 </div>
