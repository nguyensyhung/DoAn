<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
        	RolesTableSeeder::class,
            CategoriesTableSeeder::class,
        	CitiesTableSeeder::class,
        	DistrictsTableSeeder::class,
        	UsersTableSeeder::class,
            ProductsTableSeeder::class,
        	SizesTableSeeder::class,
        	ColorsTableSeeder::class,
            ProductAttributesTableSeeder::class,
        ]);
    }
}
