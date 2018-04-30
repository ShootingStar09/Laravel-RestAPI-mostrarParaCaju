<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Dentista::class, function (Faker $faker) {
    return [
      'nome'=> $faker->word,

      'CRO' => $faker->numberBetween(1,100),

      'especialidade' => $faker->word,

      'curriculo'=> $faker->word,

      'urlFoto' => 'doctor-1149149_960_720.jpg',

      'disponibilidade' => true,

    ];
});
