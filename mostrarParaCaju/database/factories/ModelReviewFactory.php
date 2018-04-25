<?php

use Faker\Generator as Faker;

use App\Model\Produto;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [

        'produto_id' => function(){

          return Produto::all()->random();

        },

        'customer' => $faker->name,

        'review' => $faker->paragraph,

        'estrela' => $faker->numberBetween(0,5)
    ];
});
