<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name'			=>	$faker->name,
        'price'			=>	$faker->numberBetween(10000, 900000),
        'description'	=>	$faker->paragraph(6),
        'content'		=>	$faker->paragraph(6),
        'status'		=> 	"1",
        'category_id'	=>	$faker->numberBetween(4, 15),

    ];
});
