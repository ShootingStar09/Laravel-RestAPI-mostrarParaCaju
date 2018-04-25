<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Produto::class, function (Faker $faker) {
    return [
        'nome'=> $faker->word,

        'detalhes' => $faker->paragraph(1,10),

        'preco' => $faker->numberBetween(100,1000),

        'armazem' => $faker->randomDigit,

        'desconto' => $faker->numberBetween(2,30)
    ];
});
