<?php

namespace App\Observers;

use App\Mail\ApprovedOrderMail;
use App\Mail\CompleteOrderMail;
use App\Mail\CancelledOrderMail;
use App\Order;
use App\OrderDetail;
use Mail;

class OrderObserver
{
    /**
     * Handle the order "created" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function created(Order $order)
    {
        //
    }

    /**
     * Handle the order "updated" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        $order        = $order;
        $orderDetails = OrderDetail::where('order_id', $order->id)->with('product')->get();

        switch ($order->status) {
            case 'approved':
                Mail::to($order->user->email)->send(new ApprovedOrderMail($order, $orderDetails));
                break;
            case 'complete':
                Mail::to($order->user->email)->send(new CompleteOrderMail($order, $orderDetails));
                break;
            case 'cancelled':
                //increase quantity of product
                if (!empty($order->orderDetails)) {
                    foreach ($order->orderDetails as $orderDetail) {
                        $order_detail_quantity    = $orderDetail->quantity;
                        $current_product_quantity = $orderDetail->product->quantity;

                        $orderDetail->product->quantity = $current_product_quantity + $order_detail_quantity;
                        $orderDetail->product->save();
                    }
                }

                //Send order tracking mail to customer
                Mail::to($order->user->email)->send(new CancelledOrderMail($order));
                break;
            default:
                # code...
                break;  
        }
    }
    /**
     * Handle the order "deleted" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the order "restored" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the order "force deleted" event.
     *
     * @param  \App\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
