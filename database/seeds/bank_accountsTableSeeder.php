<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class bank_accountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\bank_accounts::class, 40)->create();
    }
}
