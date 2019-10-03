@extends('admin.layouts.master')

@section('function')
<li class="nav-item nav-drawer-header">Chức năng</li>

<li class="nav-item nav-item-has-subnav">
    <a href="{{ route('admin.search.orders') }}"><i class="ion-ios-search"></i>Tìm kiếm</a>
</li>
@endsection

@section('breadcrumb')
	Đơn hàng / Đang chờ xử lý
@endsection

@section('content')

<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
    	<div style="margin-bottom: 20px;">
    		<a href="{{ route('admin.orders.index') }}" class="btn btn-app-light"><i class="ion-ios-arrow-back"></i> Đơn hàng</a>
    	</div>
        @switch($status)
            @case('pending')
            	<div class="card">
            		<div class="card-header bg-orange bg-inverse">
                        <h4>Đang chờ xử lý</h4>
                    </div>
                    <div class="card-block">
                    	<div class="table-responsive">
                    		<table class="table table-hover table-striped table-order">
        			        	<thead>
        			        		<tr>
        			        			<th>#</th>
        			        			<th>Ngày</th>
        			        			<th>Khách hàng</th>
        			        			<th>Địa chỉ</th>
        			        			<th class="text-right">Tổng tiền</th>
        			        			<th></th>
        			        		</tr>
        			        	</thead>
        				        <tbody>
        				        	@foreach ($orders as $order)
        				        		<tr class="pointer order" href="{{ route('admin.orders.show', $order->id) }}">
        				        			<td class="text-center">{{ $order->id }}</td>
        				        			<td>{{ date('d/m/Y H:i:s', strtotime($order->date)) }}</td>
        				        			<td>{{ $order->user->last_name . ' ' . $order->user->first_name }}</td>
        				        			<td>{{ $order->address->address }}</td>
        				        			<td class="text-right">{{ number_format($order->total) }}đ</td>
        				        			<td class="text-center">
                                                <div class="btn-group">
                                                    <form method="POST" action="{{ route('admin.orders.update.status', $order->id) }}" id="order-cancelled-form" style="display: inline;">
                                                    	@csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status" value="cancelled">
                                                    </form>
                                                    <button class="btn btn-xs btn-default" id="btn-delete" data-toggle="tooltip" title="" data-original-title="Hủy đơn hàng"><i class="ion-close"></i></button>
                                                </div>
                                            </td>
        				        		</tr>
        				        	@endforeach
        				        </tbody>
        			        </table>
        			        <div class="text-center">
        			        	{{ $orders->appends(\Request::all())->links() }}
        			        </div>
                    	</div>
                    </div>
            	</div>
                @break
            @case('approved')
                <div class="card">
                    <div class="card-header bg-cyan bg-inverse">
                        <h4>Đã duyệt</h4>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày</th>
                                        <th>Khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-right">Tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="pointer order" href="{{ route('admin.orders.show', $order->id) }}">
                                            <td class="text-center">{{ $order->id }}</td>
                                            <td>{{ date_format($order->created_at, 'd/m/Y H:i:s') }}</td>
                                            <td>{{ $order->user->last_name . ' ' . $order->user->first_name }}</td>
                                            <td>{{ $order->address->address }}</td>
                                            <td class="text-right">{{ number_format($order->total) }}đ</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <form method="POST" action="{{ route('admin.orders.update.status', $order->id) }}" id="order-cancelled-form" style="display: inline;">
                                                        @csrf
                                                        @method('PUT')
                                                        <input type="hidden" name="status" value="cancelled">
                                                    </form>
                                                    <button class="btn btn-xs btn-default" id="btn-delete" data-toggle="tooltip" title="" data-original-title="Hủy đơn hàng"><i class="ion-close"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $orders->appends(\Request::all())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                @break
            @case('complete')
                <div class="card">
                    <div class="card-header bg-green bg-inverse">
                        <h4>Hoàn tất</h4>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày</th>
                                        <th>Khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-right">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="pointer order" href="{{ route('admin.orders.show', $order->id) }}">
                                            <td class="text-center">{{ $order->id }}</td>
                                            <td>{{ date_format($order->created_at, 'd/m/Y H:i:s') }}</td>
                                            <td>{{ $order->user->last_name . ' ' . $order->user->first_name }}</td>
                                            <td>{{ $order->address->address }}</td>
                                            <td class="text-right">{{ number_format($order->total) }}đ</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $orders->appends(\Request::all())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                @break
            @case('cancelled')
                <div class="card">
                    <div class="card-header bg-red bg-inverse">
                        <h4>Đã hủy</h4>
                    </div>
                    <div class="card-block">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-order">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Ngày</th>
                                        <th>Khách hàng</th>
                                        <th>Địa chỉ</th>
                                        <th class="text-right">Tổng tiền</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr class="pointer order" href="{{ route('admin.orders.show', $order->id) }}">
                                            <td class="text-center">{{ $order->id }}</td>
                                            <td>{{ date_format($order->created_at, 'd/m/Y H:i:s') }}</td>
                                            <td>{{ $order->user->last_name . ' ' . $order->user->first_name }}</td>
                                            <td>{{ $order->address->address }}</td>
                                            <td class="text-right">{{ number_format($order->total) }}đ</td>
                                            <td class="text-center">
                                                <!-- <div class="btn-group">
                                                    <form method="POST" action="{{ route('admin.orders.delete', $order->id) }}" style="display: inline;">
                                                        @method('DELETE')
                                                        @csrf
                                                        <button class="btn btn-xs btn-default" data-toggle="tooltip" title="" data-original-title="Hủy đơn hàng"><i class="ion-close"></i></button>
                                                    </form>
                                                </div> -->
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="text-center">
                                {{ $orders->appends(\Request::all())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                @break
        @endswitch
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

    <!-- Page JS Code -->
    <script>

        $(document).ready(function () {

        	//view order details when click a tr
        	$(document).on('click', 'tr.order', function(event) {
        		event.preventDefault();
        		
        		href = $(this).attr('href');
        		window.location.replace(href);
        	});

        	$("table a, table button").on("click", function () {
        		$(document).unbind("click");
        	});

            $('button#btn-delete').on('click', function(event) {
                event.preventDefault();
                
                if (confirm('Bạn muốn hủy đơn hàng này?')) {
                    $(this).parent().children('form#order-cancelled-form').submit();
                }
            });
        });
        
    </script>

@endsection
