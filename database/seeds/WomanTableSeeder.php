<?php

use Illuminate\Database\Seeder;

class WomanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Woman::class, 10)->create();
    }
}
