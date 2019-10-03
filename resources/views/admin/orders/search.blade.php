@extends('admin.layouts.master')

@section('function')
<li class="nav-item nav-drawer-header">Chức năng</li>

<li class="nav-item nav-item-has-subnav">
    <a href="{{ route('admin.search.orders') }}"><i class="ion-ios-search"></i>Tìm kiếm</a>
</li>
@endsection

@section('breadcrumb')
	Đơn hàng / Tìm kiếm
@endsection

@section('content')

<main class="app-layout-content">

    <!-- Page Content -->
    <div class="container-fluid p-y-md">
        <div style="margin-bottom: 20px;">
            <form method="GET" action="/admin/search/orders">
                <div class="input-group input-group-lg col-md-2 pull-left">
                    <select class="form-control" id="order_by" name="search_by">
                        @if (!empty($search_by))
                            @switch($search_by)
                                @case('id')
                                    <option value="id" selected>ID</option>
                                    <option value="date">Ngày</option>
                                    <option value="user_id">ID Khách Hàng</option>
                                    @break
                                @case('date')
                                    <option value="id">ID</option>
                                    <option value="date" selected>Ngày</option>
                                    <option value="user_id">ID Khách Hàng</option>
                                    @break
                                @case('user_id')
                                    <option value="id">ID</option>
                                    <option value="date">Ngày</option>
                                    <option value="user_id" selected>ID Khách Hàng</option>
                                    @break;
                            @endswitch
                        @else
                            <option value="id">ID</option>
                            <option value="date">Ngày</option>
                            <option value="user_id">ID Khách Hàng</option>
                        @endif
                    </select>
                </div>
                <div class="input-group input-group-lg col-md-10 pull-left">
                    @if (!empty($keyword))
                        @if ($search_by == 'date')
                            <input class="form-control" type="text" name="q" placeholder="Tìm kiếm..." value="{{ date('d/m/Y', strtotime($keyword)) }}">
                        @else
                            <input class="form-control" type="text" name="q" placeholder="Tìm kiếm..." value="{{ $keyword }}">
                        @endif
                    @else
                        <input class="form-control" type="text" name="q" placeholder="Tìm kiếm...">
                    @endif
                    <div class="input-group-btn">
                        <button class="btn btn-app"><i class="ion-ios-search-strong"></i></button>
                    </div>
                </div>
            </form>
        </div>
        <div class="clearfix"></div>
        @if (!empty($orders))
            <div class="table-responsive">
                <table class="table table-hover table-striped table-order">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Ngày</th>
                            <th>Khách hàng</th>
                            <th>Địa chỉ</th>
                            <th class="text-center">Tình trạng</th>
                            <th class="text-right">Tổng tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr class="pointer order" href="{{ route('admin.orders.show', $order->id) }}">
                                <td class="text-center">{{ $order->id }}</td>
                                <td>{{ date('d/m/Y H:i:s', strtotime($order->date)) }}</td>
                                <td>{{ $order->user->last_name . ' ' . $order->user->first_name }}</td>
                                <td>{{ $order->address->address }}</td>
                                @switch($order->status)
                                @case('pending')
                                    <td class="text-center bg-orange bg-inverse">Đang chờ xử lý</td>
                                    @break
                                @case('approved')
                                    <td class="text-center bg-cyan bg-inverse">Đã duyệt</td>
                                    @break
                                @case('complete')
                                    <td class="text-center bg-green bg-inverse">Hoàn tất</td>
                                    @break
                                @case('cancelled')
                                    <td class="text-center bg-red bg-inverse">Đã hủy</td>
                                    @break
                            @endswitch
                                <td class="text-right">{{ number_format($order->total) }}đ</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
	</div>
</main>
<!-- End Page Content -->
@endsection

@section('javascript')

    <!-- AppUI Core JS: jQuery, Bootstrap, slimScroll, scrollLock and App.js -->
    <script src="{{ asset('admin/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.scrollLock.min.js') }}"></script>
    <script src="{{ asset('admin/js/core/jquery.placeholder.min.js') }}"></script>
    <script src="{{ asset('admin/js/plugins/bootstrap-datepicker/jquery.datetimepicker.full.min.js') }}"></script>
    <script src="{{ asset('admin/js/app.js') }}"></script>
    <script src="{{ asset('admin/js/app-custom.js') }}"></script>

    <!-- Page JS Code -->
    <script>

        $(document).ready(function () {
            if ($('#order_by').val() == 'date') {
                $('input[name="q"]').attr({
                    autocomplete: 'off'
                });

                $('input[name="q"]').datetimepicker({
                    timepicker: false,
                    format: 'd/m/Y',
                    minDate: '1970/01/02',
                    maxDate: '0',
                    mask: true
                });
            }

            $(document).on('click', 'tr.order', function(event) {
                event.preventDefault();
                
                href = $(this).attr('href');
                window.location.replace(href);
            });

            $(document).on('change', '#order_by', function(event) {
                event.preventDefault();
                /* Act on the event */

                if ($(this).val() == 'date') {
                    $('input[name="q"]').attr({
                        autocomplete: 'off'
                    });

                    $('input[name="q"]').datetimepicker({
                        timepicker: false,
                        format: 'd/m/Y',
                        minDate: '1970/01/02',
                        maxDate: '0',
                        mask: true
                    });
                } else {
                    $('input[name="q"]').attr({
                        autocomplete: 'on'
                    });

                    $('input[name="q"]').datetimepicker('destroy');
                }
            });
        });
        
    </script>

@endsection
