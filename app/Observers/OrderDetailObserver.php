<?php

namespace App\Observers;

use Illuminate\Support\Facades\DB;
use App\ProductAttribute;
use App\OrderDetail;
use App\Order;
use Session;

class OrderDetailObserver
{
    /**
     * Handle the order detail "creating" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void khi them mới 1 san pham
     */
    public function creating(OrderDetail $orderDetail)
    {
        $order = $orderDetail->order;
        $product = $orderDetail->product;
        //update total order
        $current_order_total = $order->total;
        $order_detail_amount = $product->price * $orderDetail->quantity;
        $order->total = $current_order_total + $order_detail_amount;
        $order->save();

        $productAttribute = ProductAttribute::where([
            ['product_id', $orderDetail->product_id],
            ['size_id', $orderDetail->size_id],
            ['color_id', $orderDetail->color_id],
        ])->first();

        $quantity = $productAttribute->quantity - $orderDetail->quantity;
        if ($quantity < 0) {
            return false;
        }
    }

    /**
     * Handle the order detail "created" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function created(OrderDetail $orderDetail)
    {
        //giỏ hàng
        // throw new \Exception($orderDetail);
        $productAttribute = ProductAttribute::where([
            ['product_id', $orderDetail->product_id],
            ['size_id', $orderDetail->size_id],
            ['color_id', $orderDetail->color_id],
        ])->first();

        $quantity = $productAttribute->quantity - $orderDetail->quantity;
        DB::statement("update `product_attributes` set `quantity` = " . $quantity . ", `product_attributes`.`updated_at` = '" . NOW() . "' where `product_id` = " . $orderDetail->product_id . " and `size_id` = " . $orderDetail->size_id . " and `color_id` = " . $orderDetail->color_id);

        $product  = $orderDetail->product;
        $productAttributes = $product->productAttributes;

        $total_quantity = 0;
        foreach ($productAttributes as $productAttribute) {
            $total_quantity += $productAttribute->quantity;
        }

        $product->update([
            'quantity' => $total_quantity,
        ]);
        Session::forget('cart');
    }

    /**
     * Handle the order detail "updated" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function updated(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the order detail "deleted" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function deleted(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the order detail "restored" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function restored(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Handle the order detail "force deleted" event.
     *
     * @param  \App\OrderDetail  $orderDetail
     * @return void
     */
    public function forceDeleted(OrderDetail $orderDetail)
    {
        //
    }
}
