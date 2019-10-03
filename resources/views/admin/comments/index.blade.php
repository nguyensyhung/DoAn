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
	Bình luận
@endsection

@section('content')

    <main class="app-layout-content">

        <!-- Page Content -->
        <div class="container-fluid p-y-md">
            @if (!empty($q))
                <div class="input-group pull-left" style="margin-bottom: 20px;">
                    <select class="form-control" style="display: inline;" onchange="window.location = this.value;">
                        @switch($rating)
                            @case('5')
                                <option value="?rating=5&q={{ $q }}" selected>Đánh giá 5 Sao</option>
                                <option value="?rating=4&q={{ $q }}">Đánh giá 4 Sao</option>
                                <option value="?rating=3&q={{ $q }}">Đánh giá 3 Sao</option>
                                <option value="?rating=2&q={{ $q }}">Đánh giá 2 Sao</option>
                                <option value="?rating=1&q={{ $q }}">Đánh giá 1 Sao</option>
                                @break
                            @case('4')
                                <option value="?rating=5&q={{ $q }}">Đánh giá 5 Sao</option>
                                <option value="?rating=4&q={{ $q }}" selected>Đánh giá 4 Sao</option>
                                <option value="?rating=3&q={{ $q }}">Đánh giá 3 Sao</option>
                                <option value="?rating=2&q={{ $q }}">Đánh giá 2 Sao</option>
                                <option value="?rating=1&q={{ $q }}">Đánh giá 1 Sao</option>
                                @break
                            @case('3')
                                <option value="?rating=5&q={{ $q }}">Đánh giá 5 Sao</option>
                                <option value="?rating=4&q={{ $q }}">Đánh giá 4 Sao</option>
                                <option value="?rating=3&q={{ $q }}" selected>Đánh giá 3 Sao</option>
                                <option value="?rating=2&q={{ $q }}">Đánh giá 2 Sao</option>
                                <option value="?rating=1&q={{ $q }}">Đánh giá 1 Sao</option>
                                @break
                            @case('2')
                                <option value="?rating=5&q={{ $q }}">Đánh giá 5 Sao</option>
                                <option value="?rating=4&q={{ $q }}">Đánh giá 4 Sao</option>
                                <option value="?rating=3&q={{ $q }}">Đánh giá 3 Sao</option>
                                <option value="?rating=2&q={{ $q }}" selected>Đánh giá 2 Sao</option>
                                <option value="?rating=1&q={{ $q }}">Đánh giá 1 Sao</option>
                                @break
                            @case('1')
                                <option value="?rating=5&q={{ $q }}">Đánh giá 5 Sao</option>
                                <option value="?rating=4&q={{ $q }}">Đánh giá 4 Sao</option>
                                <option value="?rating=3&q={{ $q }}">Đánh giá 3 Sao</option>
                                <option value="?rating=2&q={{ $q }}">Đánh giá 2 Sao</option>
                                <option value="?rating=1&q={{ $q }}" selected>Đánh giá 1 Sao</option>
                                @break
                        @endswitch
                    </select>
                </div>
                <div class="input-group pull-left" style="margin-left: 5px; margin-bottom: 20px;">
                    <select class="form-control" style="display: inline;" onchange="window.location = this.value;">
                        @switch($order_by)
                            @case('desc')
                                <option value="?rating={{ $rating }}&order_by=desc&q={{ $q }}" selected>Mới nhất</option>
                                <option value="?rating={{ $rating }}&order_by=asc&q={{ $q }}">Cũ nhất</option>
                                @break
                            @case('asc')
                                <option value="?rating={{ $rating }}&order_by=desc&q={{ $q }}">Mới nhất</option>
                                <option value="?rating={{ $rating }}&order_by=asc&q={{ $q }}" selected>Cũ nhất</option>
                                @break
                        @endswitch
                    </select>
                </div>
            @else
                <div class="input-group pull-left" style="margin-bottom: 20px;">
                    <select class="form-control" style="display: inline;" onchange="window.location = this.value;">
                        @switch($rating)
                            @case('5')
                                <option value="?rating=5" selected>Đánh giá 5 Sao</option>
                                <option value="?rating=4">Đánh giá 4 Sao</option>
                                <option value="?rating=3">Đánh giá 3 Sao</option>
                                <option value="?rating=2">Đánh giá 2 Sao</option>
                                <option value="?rating=1">Đánh giá 1 Sao</option>
                                @break
                            @case('4')
                                <option value="?rating=5">Đánh giá 5 Sao</option>
                                <option value="?rating=4" selected>Đánh giá 4 Sao</option>
                                <option value="?rating=3">Đánh giá 3 Sao</option>
                                <option value="?rating=2">Đánh giá 2 Sao</option>
                                <option value="?rating=1">Đánh giá 1 Sao</option>
                                @break
                            @case('3')
                                <option value="?rating=5">Đánh giá 5 Sao</option>
                                <option value="?rating=4">Đánh giá 4 Sao</option>
                                <option value="?rating=3" selected>Đánh giá 3 Sao</option>
                                <option value="?rating=2">Đánh giá 2 Sao</option>
                                <option value="?rating=1">Đánh giá 1 Sao</option>
                                @break
                            @case('2')
                                <option value="?rating=5">Đánh giá 5 Sao</option>
                                <option value="?rating=4">Đánh giá 4 Sao</option>
                                <option value="?rating=3">Đánh giá 3 Sao</option>
                                <option value="?rating=2" selected>Đánh giá 2 Sao</option>
                                <option value="?rating=1">Đánh giá 1 Sao</option>
                                @break
                            @case('1')
                                <option value="?rating=5">Đánh giá 5 Sao</option>
                                <option value="?rating=4">Đánh giá 4 Sao</option>
                                <option value="?rating=3">Đánh giá 3 Sao</option>
                                <option value="?rating=2">Đánh giá 2 Sao</option>
                                <option value="?rating=1" selected>Đánh giá 1 Sao</option>
                                @break
                        @endswitch
                    </select>
                </div>
                <div class="input-group pull-left" style="margin-left: 5px; margin-bottom: 20px;">
                    <select class="form-control" style="display: inline;" onchange="window.location = this.value;">
                        @switch($order_by)
                            @case('desc')
                                <option value="?rating={{ $rating }}&order_by=desc" selected>Mới nhất</option>
                                <option value="?rating={{ $rating }}&order_by=asc">Cũ nhất</option>
                                @break
                            @case('asc')
                                <option value="?rating={{ $rating }}&order_by=desc">Mới nhất</option>
                                <option value="?rating={{ $rating }}&order_by=asc" selected>Cũ nhất</option>
                                @break
                        @endswitch
                    </select>
                </div>
            @endif
            <form method="GET" action="">
                <div class="input-group pull-right" style="margin-left: 5px; margin-bottom: 20px;">
                    <input class="form-control" type="submit" value="Lọc">
                </div>
                <div class="input-group pull-right" style="margin-left: 5px; margin-bottom: 20px;">
                    @if (!empty($q))
                        <input class="form-control" name="q" value="{{ $q }}" style="display: inline;">
                    @else
                        <input class="form-control" name="q" style="display: inline;">
                    @endif
                </div>
                <div class="input-group pull-right" style="margin-top: 10px; margin-bottom: 20px;">
                    <label for="">Sản phẩm</label>
                </div>
            </form>
            <div class="clearfix"></div>
        	<div class="card">
        		<div class="card-header bg-purple bg-inverse">
                    <h4>Bình luận</h4>
                </div>
                <div class="card-block">
                	<table class="table table-condensed table-hover">
                        <thead>
                            <tr>
                                <th class="text-center w-5">#</th>
                                <th class="w-15">Người bình luận</th>
                                <th class="w-10">Biệt danh</th>
                                <th>Sản phẩm</th>
                                <th class="w-15">Chất lượng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($comments as $comment)
                                <tr class="pointer comment" href="{{ route('admin.comments.show', $comment->id) }}">
                                    <td class="text-center">{{ $comment->id }}</td>
                                    <td>{{ $comment->user->last_name . ' ' . $comment->user->first_name }}</td>
                                    <td>{{ $comment->nickname }}</td>
                                    <td>{{ $comment->product->name }}</td>
                                    <td>
                                        @for ($i = 1; $i <= $comment->rating_quality; $i++)
                                            <i class="fa fa-star"></i>
                                        @endfor
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center">
                        {{ $comments->appends(\Request::all())->links() }}
                    </div>
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

    <!-- Page JS Code -->
    <script>

        $(document).ready(function () {

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

            //view order details when click a tr
            $(document).on('click', 'tr.comment', function(event) {
                event.preventDefault();
                
                href = $(this).attr('href');
                window.location.replace(href);
            });

        });
        
    </script>

@endsection
