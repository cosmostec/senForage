<?php

use Illuminate\Database\Seeder;

class AdministrateursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Administrateur::class, 2)->create();
    }
}
