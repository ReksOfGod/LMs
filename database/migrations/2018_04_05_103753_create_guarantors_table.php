<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuarantorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guarantors', function (Blueprint $table) {
            $table->tinyIncrements('gurantorId');
            $table->integer('user_id')->default(0); 
            $table->bigInteger('homePhoneNumber')->unique();
            $table->bigInteger('mobilePhoneNumber')->unique();
            $table->char('fname',15);
            $table->char('lname',15);            
            $table->integer('loan_id');           
            $table->timestamps();
                       
            //$table->foreign('user_id')  ->references('userId')->on('users') ->onDelete('cascade')->onUpdate('CASCADE');
            
            //$table->foreign('loanId')  ->references('loanId')->on('loan') ->onDelete('cascade')->onUpdate('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guarantors');
        Schema::disableForeignKeyConstraints();
    }
}
