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
    Bình luận / Chi tiết bình luận
@endsection

@section('content')

    <main class="app-layout-content">

        <!-- Page Content -->
        <div class="container-fluid p-y-md">
            <div style="margin-bottom: 20px;">
                <a href="{{ url()->previous() }}" class="btn btn-app-light"><i class="ion-ios-arrow-back"></i> Quay lại</a>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <ul class="nav nav-tabs nav-tabs-icons nav-tabs-alt nav-justified" data-toggle="tabs">
                            <li class="active">
                                <a href="#btabs-alt-static-justified-product"><i class="ion-ios-book"></i> Sản phẩm</a>
                            </li>
                            <li>
                                <a href="#btabs-alt-static-justified-profile"><i class="ion-person"></i> Người bình luận</a>
                            </li>
                        </ul>
                        <div class="card-block tab-content">
                            <div class="tab-pane active" id="btabs-alt-static-justified-product">
                                <form class="form-horizontal m-t-sm" action="" method="post" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ $comment->product->id }}" disabled="">
                                                <label for="material-text">ID</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ $comment->product->name }}" disabled="">
                                                <label for="material-text">Tên</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label class="col-xs-12" for="example-textarea-input">Mô tả</label>
                                                <div class="col-xs-12">
                                                    <textarea class="form-control"rows="10" disabled="">{{ $comment->product->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ $comment->product->quantity }}" disabled="">
                                                <label for="material-email">Số lượng</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ number_format($comment->product->price) }}đ" disabled="">
                                                <label for="material-email">Giá</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="btabs-alt-static-justified-profile">
                                <form class="form-horizontal m-t-sm" action="" method="post" onsubmit="return false;">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ $comment->user->id }}" disabled="">
                                                <label for="material-text">ID</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ $comment->user->last_name }}" disabled="">
                                                <label for="material-text">Họ</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ $comment->user->first_name }}" disabled="">
                                                <label for="material-text">Tên</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ $comment->user->email }}" disabled="">
                                                <label for="material-password">Email</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-xs-6">
                                            <div class="form-material">
                                                <input class="form-control" type="text" value="{{ convert_to_my_date_format($comment->user->birthday) }}" disabled="">
                                                <label for="material-email">Ngày sinh</label>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-material">
                                                @if ($comment->user->sex == 'male')
                                                    <input class="form-control" type="text" value="Nam" disabled="">
                                                @else
                                                    <input class="form-control" type="text" value="Nữ" disabled="">
                                                @endif
                                                <label for="material-email">Giới tính</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-purple bg-inverse">
                            <h4>Chi tiết bình luận</h4>
                            <ul class="card-actions">
                                <button class="btn btn-app-green hide" id="btn-update">Cập nhật</button>
                                <form method="POST" action="{{ route('admin.comments.delete', $comment->id) }}" id="comment-delete-form" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button class="btn btn-app-red" id="btn-delete">Xóa</button>
                            </ul>
                        </div>
                        <div class="card-block">
                            <form class="form-horizontal m-t-sm" id="comment-update-form" method="POST" action="{{ route('admin.comments.update', $comment->id) }}">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <div class="col-sm-2">
                                        <div class="form-material">
                                            <input class="form-control" id="comment-id" type="text" value="{{ $comment->id }}" disabled="">
                                            <label for="material-text">ID</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-material">
                                            <input class="form-control" type="text" id="input-nickname" name="nickname" value="{{ $comment->nickname }}" spellcheck="false">
                                            <label for="material-text">Biệt danh</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-material">
                                            <input class="form-control" type="text" id="input-title" name="title" value="{{ $comment->title }}" spellcheck="false">
                                            <label for="material-text">Tiêu đề</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="col-xs-12" for="example-textarea-input">Nội dung</label>
                                            <div class="col-xs-12">
                                                <textarea class="form-control" id="input-content" name="content" rows="10" spellcheck="false">{{ $comment->content }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material">
                                            <label for="material-email">Chất lượng</label><br>
                                            @for ($i = 1; $i <= $comment->rating_quality; $i++)
                                                <i class="fa fa-star"></i>
                                            @endfor
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
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

            $('#input-nickname, #input-title, #input-content').on('input', function(event) {
                event.preventDefault();

                $('button#btn-update').attr({
                    class: 'btn btn-app-green'
                });
            });

            $('button#btn-update').on('click', function(event) {
                event.preventDefault();
                
                $('form#comment-update-form').submit();
            });

            $('button#btn-delete').on('click', function(event) {
                event.preventDefault();
                
                if (confirm('Bạn muốn xóa bình luận này?')) {
                    $('form#comment-delete-form').submit();
                }
            });

        });

    </script>

@endsection
