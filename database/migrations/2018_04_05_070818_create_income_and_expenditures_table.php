<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncomeAndExpendituresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('income_and_expenditures', function (Blueprint $table) {
            $table->tinyIncrements('income_and_expenditures_id');
            $table->timestamps();
            $table->integer('user_id')->default(0);
           // $table->foreign('user_id')  ->references('userId')->on('users') ->onDelete('cascade')->onUpdate('CASCADE');
            
            $table->bigInteger('monthlyConsolidatedPay');
            $table->bigInteger('otherIncome')->nullable($value = 0);
            $table->bigInteger('monthlyExpenditure');
            $table->bigInteger('otherMonthlyloanRepayments')->nullable($value = 0);
            $table->unsignedMediumInteger('loanId');
           // $table->foreign('loanId')  ->references('loanId')->on('loan') ->onDelete('cascade')->onUpdate('CASCADE');
            //$table->primary(['income_and_expenditures_id', 'loanId','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('income_and_expenditures');
        Schema::disableForeignKeyConstraints();
    }
}
