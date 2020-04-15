<?php

use Illuminate\Database\Seeder;

class PassportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Passport::class, 10)->create();

    }
}
