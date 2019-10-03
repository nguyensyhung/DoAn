<?php

use Illuminate\Database\Seeder;
use App\ProductAttribute;
class ProductAttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductAttribute::create(['product_id' => 1, 'Size_id' => 1, 'color_id' => 1, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 1, 'Size_id' => 2, 'color_id' => 2, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 1, 'Size_id' => 3, 'color_id' => 3, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 2, 'Size_id' => 1, 'color_id' => 1, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 2, 'Size_id' => 3, 'color_id' => 2, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 2, 'Size_id' => 2, 'color_id' => 3, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 3, 'Size_id' => 1, 'color_id' => 3, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 3, 'Size_id' => 2, 'color_id' => 2, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 3, 'Size_id' => 3, 'color_id' => 1, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 4, 'Size_id' => 1, 'color_id' => 1, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 4, 'Size_id' => 2, 'color_id' => 2, 'quantity' => 10]);
        ProductAttribute::create(['product_id' => 4, 'Size_id' => 3, 'color_id' => 3, 'quantity' => 10]);

    }
}
