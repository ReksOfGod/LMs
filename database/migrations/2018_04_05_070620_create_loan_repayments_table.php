<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoanRepaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loan_repayments', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->integer('user_id')->default(0);
            $table->timestamps();            
            $table->bigInteger('outstandingAmount');
            $table->bigInteger('portfolioAtRisk');
            $table->bigInteger('amountInDefault');
            $table->date('paymentDueDate');
            $table->unsignedMediumInteger('loanId');
            //$table->foreign('loanId')  ->references('loanId')->on('loan') ->onDelete('cascade')->onUpdate('CASCADE');
            
            //$table->foreign('user_id')  ->references('id')->on('users') ->onDelete('cascade')->onUpdate('CASCADE');
            //$table->primary(['id', 'loanId','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loan_repayments');
        Schema::disableForeignKeyConstraints();
    }
}
