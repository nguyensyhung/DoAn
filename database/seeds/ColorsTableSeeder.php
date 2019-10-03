<?php

use Illuminate\Database\Seeder;
use App\Color;
class ColorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create([
        	'name' => 'Xanh',
        ]);
        Color::create([
        	'name' => 'Xám',
        ]);
        Color::create([
        	'name' => 'Đỏ',
        ]);
        Color::create([
        	'name' => 'Vàng',
        ]);
        Color::create([
        	'name' => 'Tím',
        ]);
    }
}
