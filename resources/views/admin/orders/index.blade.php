@extends('admin.layouts.master')

@section('function')
<li class="nav-item nav-drawer-header">Chức năng</li>

<li class="nav-item nav-item-has-subnav">
    <a href="{{ route('admin.search.orders') }}"><i class="ion-ios-search"></i>Tìm kiếm</a>
</li>
@endsection

@section('breadcrumb')
	Đơn hàng
@endsection

@section('content')

<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
    	<div class="card">
    		<div class="card-header">
                <h4>{{ $numberOfOrders }} Đơn hàng</h4>
            </div>
            <div class="card-block">
            	<div class="col-sm-6 col-lg-3">
                    <a class="card bg-orange bg-inverse" href="?status=pending">
                        <div class="card-block clearfix">
                            <div class="pull-right">
                                <p class="h6 text-muted m-t-0 m-b-xs">Đang chờ xử lý</p>
                                <p class="h3 m-t-sm m-b-0">{{ $numberOfPendingOrders }}</p>
                            </div>
                            <div class="pull-left m-r">
                                <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-timer-outline fa-1-5x"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="card bg-cyan bg-inverse" href="?status=approved">
                        <div class="card-block clearfix">
                            <div class="pull-right">
                                <p class="h6 text-muted m-t-0 m-b-xs">Đã duyệt</p>
                                <p class="h3 m-t-sm m-b-0">{{ $numberOfApprovedOrders }}</p>
                            </div>
                            <div class="pull-left m-r">
                                <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-checkmark-circled fa-1-5x"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="card bg-green bg-inverse" href="?status=complete">
                        <div class="card-block clearfix">
                            <div class="pull-right">
                                <p class="h6 text-muted m-t-0 m-b-xs">Hoàn tất</p>
                                <p class="h3 m-t-sm m-b-0">{{ $numberOfCompleteOrders }}</p>
                            </div>
                            <div class="pull-left m-r">
                                <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-android-done-all fa-1-5x"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <a class="card bg-red bg-inverse" href="?status=cancelled">
                        <div class="card-block clearfix">
                            <div class="pull-right">
                                <p class="h6 text-muted m-t-0 m-b-xs">Đã hủy</p>
                                <p class="h3 m-t-sm m-b-0">{{ $numberOfCancelledOrders }}</p>
                            </div>
                            <div class="pull-left m-r">
                                <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-close-circled fa-1-5x"></i></span>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="clearfix"></div>
            </div>
    	</div>
    </div>
    <!-- End Page Content -->

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

@endsection
