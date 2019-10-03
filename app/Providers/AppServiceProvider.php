<?php

namespace App\Providers;

use App\Category;
use App\Order;
use App\OrderDetail;
use App\ProductAttribute;
use App\Product;
use App\Observers\CategoryObserver;
use App\Observers\OrderDetailObserver;
use App\Observers\OrderObserver;
use App\Observers\ProductAttributeObserver;
use App\Observers\ProductObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Category::observe(CategoryObserver::class);
        OrderDetail::observe(OrderDetailObserver::class);
        ProductAttribute::observe(ProductAttributeObserver::class);
        Order::observe(OrderObserver::class);
        Product::observe(ProductObserver::class);
    }
}
