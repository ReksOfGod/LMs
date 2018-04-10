<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDisbursementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disbursements', function (Blueprint $table) {
            
            $table->timestamps();
            $table->integer('user_id')->default(0);
            $table->tinyIncrements('disbursementId');
            //$table->foreign('user_id')  ->references('userId')->on('users') ->onDelete('cascade')->onUpdate('CASCADE');
            $table->bigInteger('amount');
            $table->unsignedMediumInteger('loanId');
            //$table->foreign('loanId')  ->references('loanId')->on('loan') ->onDelete('cascade')->onUpdate('CASCADE');
            //$table->primary([ 'loanId','user_id','disbursementId']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disbursements');
        Schema::disableForeignKeyConstraints();
    }
}
