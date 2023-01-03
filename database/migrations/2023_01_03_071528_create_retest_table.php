<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('retest', function(Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('destination');
            $table->date('date_trip');
            $table->integer('risk')->default(0);
            $table->timestamps();
        });
      
        //
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
};
