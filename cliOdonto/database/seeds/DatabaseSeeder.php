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
        factory(App\Model\cliente::class,50)->create();

        factory(App\Model\Dentista::class,20)->create();

        factory(App\User::class,1)->create();
        
        factory(App\Model\consulta::class,30)->create();


    }
}
