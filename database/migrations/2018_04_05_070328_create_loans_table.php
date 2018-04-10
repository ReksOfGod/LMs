<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            
            $table->timestamps();
            $table->unsignedMediumInteger('user_id')->default(0);
            //$table->foreign('user_id')  ->references('userId')->on('users') ->onDelete('cascade')->onUpdate('CASCADE');
            $table->mediumIncrements('loanId')->unsigned();
            $table->bigInteger('amount');         
            
            $table->bigInteger('shareContribution');
            $table->unsignedTinyInteger('monthlyInstallments');
            $table->bigInteger('monthlyPayments');
            $table->integer('insuranceCharge');
            //$table->primary([ 'loanId','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loans');
        Schema::disableForeignKeyConstraints();
    }
}
