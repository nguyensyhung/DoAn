<!DOCTYPE html>
<html lang="en"><head>
	<title>{{ config('app.name', 'Laravel') }}</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" href="{{ asset('vendor/bootstrap.css') }}">
	<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
	<link rel="stylesheet" href="{{ asset('vendor/font-awesome.css') }}">
 	<link rel="stylesheet" href="{{ asset('css/1.css') }}">
 	<link rel="stylesheet" href="{{ asset('css/2.css') }}">
	<!-- load file css tự viết -->
 	<link rel="stylesheet" type="text/css" href="{{ asset('css/products.css') }}">
 	<link rel="stylesheet" type="text/css" href="{{ asset('css/3.css') }}">
 	@yield('css')

	<script type="text/javascript" src="{{ asset('vendor/bootstrap.js')}}"></script>
</head>
<body>
	
<!-- HeaderTop -->
        @include('layouts.partials.headertop')
 <!-- //HeaderTop -->
<!-- <div id="container">
<div id="menutop-wrapper"> -->
 <!-- Header  -->
 		@include('layouts.partials.menutop')
 <!-- end Header -->
<!-- </div>
<div id="content-wrapper"> -->
 <!-- content -->
 		@yield('content')
 <!-- end content -->
 <div class="navbar-fixed-bottom ">
		<a href="" class="btn btn-primary nutlen float-lg-right">
			<i class="fa fa-chevron-up ">	</i>
		</a>
 </div>
<!-- </div> -->
<!-- <div id="footer-wrapper"> -->
	<!-- footer -->
	 	@include('layouts.partials.footer')
	<!-- end footer -->
<!-- </div>
</div> -->



		
<!--  Xử lý Javascrip -->
<!-- load thu vien jquery -->
 <script type="text/javascript" src="{{ asset('js/jquery-1.12.3.min.js') }}"></script>
 <script type="text/javascript" src="{{ asset('js/1.js')}}"></script>
 <script type="text/javascript" src="{{ asset('js/chuyenmenu.js')}}"></script>
 <script type="text/javascript" src="{{ asset('js/fillter.js')}}"></script>
 <script type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
 <script type="text/javascript">
 	$('.search').slideUp();

 	$(document).ready(function(){
  		$("#search_hien").click(function(){
    		$("#search").slideToggle("slow");
  		});
  		$('#form-logout').hide();
	    $('#btn-logout').on('click', function(e) {
	      e.preventDefault();

	      $('#form-logout').submit();
	    })
	});
 </script>
 <script type="text/javascript">
		$('.nutlen').click(function(){
    		$("html, body").animate({ scrollTop: 0 }, 600);
    		return false;
		});
</script>
<script src="{{asset('js/toastr.min.js')}}"></script>
<script> 
            @if(Session::has('success'))
            toastr.success("{{Session::get('success')}}")

            @endif
</script>
 @yield('script')
</body>
</html>