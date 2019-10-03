<?php

namespace App\Observers;

use App\ProductAttribute;

class ProductAttributeObserver
{
    /**
     * Handle the product attribute "created" event.
     *
     * @param  \App\ProductAttribute  $productAttribute
     * @return void
     */
    public function created(ProductAttribute $productAttribute)
    {
        $product =  $productAttribute->product;
        $productAttributes = $product->productAttributes;

        $total_quantity = 0;
        foreach ($productAttributes as $productAttribute) {
            $total_quantity += $productAttribute->quantity;
        }

        $product->update([
            'quantity' => $total_quantity,
        ]);
    }

    /**
     * Handle the product attribute "updated" event.
     *
     * @param  \App\ProductAttribute  $productAttribute
     * @return void
     */
    public function updated(ProductAttribute $productAttribute)
    {
        
    }

    /**
     * Handle the product attribute "deleted" event.
     *
     * @param  \App\ProductAttribute  $productAttribute
     * @return void
     */
    public function deleted(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Handle the product attribute "restored" event.
     *
     * @param  \App\ProductAttribute  $productAttribute
     * @return void
     */
    public function restored(ProductAttribute $productAttribute)
    {
        //
    }

    /**
     * Handle the product attribute "force deleted" event.
     *
     * @param  \App\ProductAttribute  $productAttribute
     * @return void
     */
    public function forceDeleted(ProductAttribute $productAttribute)
    {
        //
    }
}
