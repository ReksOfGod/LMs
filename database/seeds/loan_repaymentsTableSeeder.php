<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class loan_repaymentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\loan_repayments::class, 40)->create();
    }
}
