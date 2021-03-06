@extends('layouts.app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('css/footer.css')}}">
@endsection
@section('content')
	@if(session('success'))

        <div class="alert alert-success">
            {{ session('success') }}
        </div>

    @endif
    <div class="container">

    <table id="cart" class="table table-hover table-condensed">
        <thead>
        <tr>
            <th style="width:50%">Sản phẩm</th>
            <th style="width:10%">Giá</th>
            <th style="width:10%">Số lượng</th>
            <th style="width:20% padding-left: 40px;">Tổng tiền</th>
            <th style="width:10%"></th>
        </tr>
        </thead>
        <tbody>

        <?php $total = 0 ?>

        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <?php $total += $details['price'] * $details['quantity'] ?>

                <tr>
                    <td>
                        <div class="row">
                            <div class="col-sm-3 hidden-xs"><img src="{{$details['image']}}" width="100" height="100" class="img-responsive"/></div>
                            <div class="col-sm-9">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td >{{number_format($details['price']) }} VND</td>
                    <td>
                        <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity" />
                    </td>
                    <td  style="padding-left: 40px;">{{number_format($details['price'] * $details['quantity'])}} VND</td>
                    <td class="actions">
                        <button class="btn btn-info btn-sm update-cart" data-id="{{ $id }}"><i class="fa fa-refresh"></i></button>
                        <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></button>
                    </td>
                </tr>
            @endforeach
        @endif

        </tbody>
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Thành tiền: {{number_format( $total) }} VND</strong></td>
            </tr>
            <tr>
                <td><a href="{{ route('shop') }}" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                <td colspan="2" class="hidden-xs"></td>
                <td class="hidden-xs text-center"><a href="{{ route('cart.show_checkout_form') }}" class="btn btn-outline-secondary"> Thanh toán</a></strong></td>
            </tr>
        </tfoot>
    </table>
</div>
@endsection
@section('script')


    <script type="text/javascript">

        $(".update-cart").click(function (e) {
           e.preventDefault();

           var ele = $(this);

            $.ajax({
               url: '{{ url('update-cart') }}',
               method: "patch",
               data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
               success: function (response) {
                   window.location.reload();
               }
            });
        });

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
