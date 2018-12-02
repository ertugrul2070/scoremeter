<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TotalscoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('totalscore', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total_gryf');
            $table->integer('total_slyth');
            $table->integer('total_huffle');
            $table->integer('total_raven');
            $table->string('day');
            $table->rememberToken();
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
        //
    }
}
