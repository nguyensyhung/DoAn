@extends('admin.layouts.master')

@section('function')
	<li class="nav-item nav-drawer-header">Chức năng</li>

	<li class="nav-item nav-item-has-subnav">
	    <!-- <a href=""><i class="ion-ios-search"></i>Tìm kiếm</a> -->
	    <!-- <ul class="nav nav-subnav">
	        <li>
	            <a href="base_ui_buttons.html">Buttons</a>
	        </li>
	        <li>
	            <a href="base_ui_cards.html">Cards</a>
	        </li>
	    </ul> -->
	</li>
@endsection

@section('breadcrumb')
	Danh mục / Thêm danh mục
@endsection

@section('content')

	<main class="app-layout-content">

		<!-- Page Content -->
		<div class="container-fluid p-y-md">
			<div style="margin-bottom: 20px;">
	    		<a href="{{ route('admin.categories.index') }}" class="btn btn-app-light"><i class="ion-ios-arrow-back"></i> Danh mục</a>
	    	</div>
			<div class="card">
                <div class="card-header bg-green bg-inverse">
                    <h4>Thêm danh mục</h4>
                    <!-- <ul class="card-actions">
                        <li>
                            <button type="button"><i class="ion-more"></i></button>
                        </li>
                    </ul> -->
                </div>
                <div class="card-block">
                    <form method="POST" action="{{ route('admin.categories.store') }}" class="form-horizontal m-t-sm" autocomplete="off">
                    	@csrf
                        <div class="form-group">
                            <div class="col-xs-3">
                                <div class="form-material floating">
                                    <input class="form-control" type="text" id="category-name" name="name" value="{{ old('name') }}">
                                    <label for="category-name">Tên <span class="text-red">*</span></label>
                                </div>
                                @if ($errors->has('name'))
	                                <div class="has-error">
	                                	<i>{{ $errors->first('name') }}</i>
	                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-3">
                                <div class="form-material floating">
                                    <select class="form-control" id="category-parent" name="parent_id" size="1">
										<option value="0"></option>
										@foreach ($categories as $category)
											@if ($category->id == old('parent_id'))
												<option value="{{ $category->id }}" selected>{{ $category->name }}</option>
											@else
												<option value="{{ $category->id }}">{{ $category->name }}</option>
											@endif
											
										@endforeach
									</select>
                                    <label for="category-parent">Danh mục cha</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-xs-12">
                                <button class="btn btn-app-green">Thêm</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
		</div>
		<!-- End Page Content -->

		@if (session('type'))
			<div id="message" type="{{ session('type') }}" message="{{ session('message') }}"></div>
		@endif

	</main>

@endsection

@section('javascript')

	<!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
	<script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
	<script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
	<script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
	<script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
	<script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
	<script src="{{ asset('admin/js/app.js') }}"></script>
	<script src="{{ asset('admin/js/app-custom.js') }}"></script>

	<!-- Page JS Plugins -->
	<script src="{{ asset('admin/js/plugins/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<script>
		jQuery(document).ready(function($) {
			if ($('#message').length) {
				type = $('#message').attr('type');
				message = $('#message').attr('message');

				$.notify({
					title: '<strong>' + message + '</strong>',
					message: ''
				}, {
					element: 'body',
					type: type
    			});
			}
		});
	</script>

@endsection
