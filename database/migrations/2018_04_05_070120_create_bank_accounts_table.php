<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Schema::enableForeignKeyConstraints();
        Schema::create('bank_accounts', function (Blueprint $table) {
            $table->tinyIncrements('bank_accounts_id');
            $table->timestamps();
            $table->integer('user_id')->default(0);
           // $table->foreign('user_id')  ->references('userId')->on('users') ->onDelete('cascade')->onUpdate('CASCADE');
            $table->string('accountName/title');
            $table->string('bankBranch');
            $table->string('bankName');
            $table->bigInteger('accountNumber');
            //$table->primary(['bank_accounts_id','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bank_accounts');
        
    }
}
