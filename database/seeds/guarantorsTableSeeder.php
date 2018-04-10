<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class guarantorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\guarantor::class, 40)->create();
    }
}
