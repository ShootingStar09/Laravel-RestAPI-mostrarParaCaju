<?php

use Faker\Generator as Faker;

$factory->define(App\Model\cliente::class, function (Faker $faker) {
    return [
      'nome'=> $faker->word,

      'cpf' => $faker->word,

      'idade' => $faker->numberBetween(1,60),

      'urlFoto' => 'cantinho-de-maria.jpg',

      'disponibilidade' => true,
    ];
});
