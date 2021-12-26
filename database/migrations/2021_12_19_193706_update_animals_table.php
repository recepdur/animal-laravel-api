<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dateTime('birthday')->nullable()->change();
			$table->string('race', 50)->nullable()->change();
			$table->string('gender', 15)->nullable()->change();
			$table->string('status', 15)->nullable()->change();
            $table->string('mother_ear_no', 25)->nullable()->change(); 
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
