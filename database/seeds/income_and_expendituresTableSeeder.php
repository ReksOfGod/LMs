<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class income_and_expendituresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\income_and_expenditure::class, 40)->create();
    }
}
