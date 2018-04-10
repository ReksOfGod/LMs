<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\loan::class, 40)->create();
    }
}
