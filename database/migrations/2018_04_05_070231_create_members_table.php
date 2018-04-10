<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
           
            $table->tinyIncrements('memberId');
            $table->char('fname',15);
            $table->char('lname',15);            
            $table->date('dateOfBirth');
            $table->bigInteger('homePhoneNumber')->unique();
            $table->bigInteger('mobilePhoneNumber')->unique();
            $table->enum('employmentStatus', ['Contract', 'Permanent']);
            $table->char('postionHeld', 29);
            $table->date('contractEnd');
            $table->integer('user_id')->default(0);
            $table->timestamps();
            //$table->foreign('user_id')  ->references('userId')->on('users') ->onDelete('cascade')->onUpdate('CASCADE');
            //$table->primary([ 'memberId','user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
        Schema::disableForeignKeyConstraints();
    }
}
