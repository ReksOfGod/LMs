<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(StocksTableSeeder::class);
        $this->call(disbursementsTableSeeder::class);        
        $this->call(bank_accountsTableSeeder::class);
        $this->call(guarantorsTableSeeder::class);
        $this->call(income_and_expendituresTableSeeder::class);
        $this->call(loan_repaymentsTableSeeder::class);
        $this->call(loansTableSeeder::class);
        $this->call(membersTableSeeder::class);
       
    }
}
