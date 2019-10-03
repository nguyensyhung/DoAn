<h2>Đơn hàng với mã <i>{{ $order->id }}</i> của bạn đã hoàn tất</h2>
<h5>Chi tiết đơn hàng</h5>
<table border="1" style="border-collapse: collapse;">
	<thead>
		<tr>
			<th>#</th>
			<th>Sản phẩm</th>
			<th>Số lượng</th>
			<th>Đơn giá</th>
			<th>Thành tiền</th>
		</tr>
	</thead>
	<tbody>
		@php($i = 0)
		@foreach($orderDetails as $orderDetail)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $orderDetail->product->name }}</td>
				<td>{{ $orderDetail->quantity }}</td>
				<td>{{ number_format($orderDetail->product->price) }}đ</td>
				<td>{{ number_format($orderDetail->product->price * $orderDetail->quantity) }}đ</td>
			</tr>
		@endforeach
		<tr>
			<td style="text-align: right;" colspan="4">Tổng tiền</td>
			<td>{{ number_format($order->total) }}đ</td>
		</tr>
	</tbody>
</table>
<h3><i>Cảm ơn bạn đã mua sản phẩm của chúng tôi! Hẹn gặp lại bạn.</i></h3>