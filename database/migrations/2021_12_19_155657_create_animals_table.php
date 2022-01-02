<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
			$table->string('ear_no')->nullable();
            $table->string('name')->nullable();
            $table->string('status')->nullable();
			$table->string('race')->nullable();
			$table->string('gender')->nullable();
            $table->string('mother_ear_no')->nullable();
            $table->string('father_ear_no')->nullable(); 
            $table->string('description')->nullable();
			$table->dateTime('birth_date')->nullable();
            $table->dateTime('arrival_date')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('animals');
    }
}
