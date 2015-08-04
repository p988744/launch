<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaunchsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('launchs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('timming');
            $table->boolean('is_alive');
            $table->numeric('price');
            $table->numeric('location');
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
        Schema::drop('launchs');
    }
}
