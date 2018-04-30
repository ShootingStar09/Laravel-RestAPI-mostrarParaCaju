<?php

use Faker\Generator as Faker;

use App\Model\Dentista;
use App\Model\cliente;

$factory->define(App\Model\consulta::class, function (Faker $faker) {
    return [
      'dentista_id' => function(){

        return Dentista::all()->random();

      },

      'cliente_id' => function(){

        return Cliente::all()->random();

      },

      'tipo' => 'operacao',

      'estado' =>  'pendente',

      'preco' =>  $faker->numberBetween(1,100),

      'agendada_para' => $faker->date('Y-m-d','now'),

      'hora_agendada' => $faker->time('H:i:s','now')
    ];
});
