<?php
use App\Attribute;
use Illuminate\Database\Seeder;

class AttributesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attribute::create(['name' => 'Màu sắc']);
        Attribute::create(['name' => 'Kích cỡ']);
    }
}
