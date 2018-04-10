<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_products', function (Blueprint $table) {
            $table->increments('loan_products_id');
            $table->timestamps();
            $table->enum('loantype',['DEVELOPMENT','EMMERGENCY','SHARE','OPEN FINANCE','BUYOUT','Quick Loan']);
            $table->enum('processCharge',['20,000','10000']);
            $table->float('interestRate',2,2);
            $table->integer('maxTime');
            $table->integer('MaxAmount');
            $table->integer('loanTopUp');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_products');
    }
}
