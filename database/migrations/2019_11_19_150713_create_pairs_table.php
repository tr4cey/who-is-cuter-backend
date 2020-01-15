<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pairs', function (Blueprint $table) {
            $table->increments('id');
	    $table->integer('pic1_id')->unsigned();
	    $table->foreign('pic1_id')->references('id')->on('pictures');
	    $table->bigInteger('pic1_votes');
	    $table->integer('pic2_id')->unsigned();
	    $table->foreign('pic2_id')->references('id')->on('pictures');
            $table->bigInteger('pic2_votes');
	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pairs');
    }
}
