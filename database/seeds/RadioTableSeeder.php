<?php

use Illuminate\Database\Seeder;

class RadioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Radio::class, 10)->create();
    }
}
