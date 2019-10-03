<?php
use App\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Màu sắc
    	
    	AttributeValue::create([
        	'name' => 'Xanh',
        	'attribute_id' => 1,
        ]);
        AttributeValue::create([
        	'name' => 'Xám',
        	'attribute_id' => 1,
        ]);
        AttributeValue::create([
        	'name' => 'Đỏ',
        	'attribute_id' => 1,
        ]);
        AttributeValue::create([
        	'name' => 'Vàng',
        	'attribute_id' => 1,
        ]);
        AttributeValue::create([
        	'name' => 'Tím',
        	'attribute_id' => 1,
        ]);

        //Kích thước
        AttributeValue::create([
        	'name' => 'S',
        	'attribute_id' => 2,
        ]);
        AttributeValue::create([
        	'name' => 'M',
        	'attribute_id' => 2,
        ]);
        AttributeValue::create([
        	'name' => 'L',
        	'attribute_id' => 2,
        ]);
        AttributeValue::create([
        	'name' => 'XL',
        	'attribute_id' => 2,
        ]);
        AttributeValue::create([
        	'name' => 'XXL',
        	'attribute_id' => 2,
        ]);

    }
}
