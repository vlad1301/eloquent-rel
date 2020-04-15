<?php

use Illuminate\Database\Seeder;

class MenTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Man::class, 10)->create();

    }
}
