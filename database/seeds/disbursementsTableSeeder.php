<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class disbursementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\disbursement::class, 40)->create();
    }
}
