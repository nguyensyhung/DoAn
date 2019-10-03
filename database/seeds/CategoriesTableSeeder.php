<?php
use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'Thời trang Nam','slug' => utf8tourl('nam')]);
        Category::create(['name' => 'Thời trang Nữ', 'slug' => utf8tourl('nữ')]);
        Category::create(['name' => 'Phụ kiện', 'slug' => utf8tourl('phụ kiện')]);

        //thời trang nam
        Category::create([
        	'name'	=> 'Áo sơ mi',
            'slug' => utf8tourl('Áo sơ mi'),
        	'parent_id' => 1,
        ]);
        Category::create([
        	'name'	=> 'Áo phông',
            'slug' => utf8tourl('Áo phông'),
        	'parent_id' => 1,
        ]);
        Category::create([
        	'name'	=> 'Quần tây',
            'slug' => utf8tourl('Quần tây'),
        	'parent_id' => 1,
        ]);
        Category::create([
        	'name'	=> 'Quần Short',
            'slug' => utf8tourl('Quần Short'),
        	'parent_id' => 1,
        ]);

        //thời trang nữ
        Category::create([
        	'name'	=> 'Đầm dạ hội',
            'slug' => utf8tourl('Đầm dạ hội'),
        	'parent_id' => 2,
        ]);
        Category::create([
        	'name'	=> 'Váy ngắn Style',
            'slug' => utf8tourl('Váy ngắn Style'),
        	'parent_id' => 2,
        ]);
        Category::create([
        	'name'	=> 'Quần nỉ',
            'slug' => utf8tourl('Quần nỉ'),
        	'parent_id' => 2,
        ]);
        Category::create([
        	'name'	=> 'Quần Jeans',
            'slug' => utf8tourl('Quần Jeans'),
        	'parent_id' => 2,
        ]);

        //phụ kiện
        Category::create([
        	'name'	=> 'Đồng hồ',
            'slug' => utf8tourl('Đồng hồ'),
        	'parent_id' => 3,
        ]);
        Category::create([
        	'name'	=> 'Balo chéo',
            'slug' => utf8tourl('Balo chéo'),
        	'parent_id' => 3,
        ]);
        Category::create([
        	'name'	=> 'Kính râm',
            'slug' => utf8tourl('Kính râm'),
        	'parent_id' => 3,
        ]);
        Category::create([
        	'name'	=> 'Dây nịt',
            'slug' => utf8tourl('Dây nịt'),
        	'parent_id' => 3,
        ]);
    }
}
