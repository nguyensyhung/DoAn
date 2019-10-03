<?php

namespace App\Observers;

use App\ProductAttribute;
use App\Product;

class ProductObserver
{
    /**
     * Handle the product "created" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function created(Product $product)
    {
        //
    }

    /**
     * Handle the product "updated" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function updated(Product $product)
    {
        //
    }
    /**
     * Handle the product "deleting" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
        public function deleting(Product $product)
    {
        $productAttributes = $product->productAttributes;
        $images            = $product->images;

        if(!empty($productAttributes))
        {
            foreach ($productAttributes as $productattri) {
                $productattri->delete();
            }
        }

        if (!empty($images)) {
            foreach ($images as $image) {
                $image->delete();
            }
        }
    }

    /**
     * Handle the product "deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function deleted(Product $product)
    {
        //
    }

    /**
     * Handle the product "restored" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function restored(Product $product)
    {
        //
    }

    /**
     * Handle the product "force deleted" event.
     *
     * @param  \App\Product  $product
     * @return void
     */
    public function forceDeleted(Product $product)
    {
        //
    }

}
