<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eplays', function (Blueprint $table) {
            $table->increments('id');
            $table->date('playdate');
            $table->time('playtime');
            $table->integer('emission_id')->unsigned();
            $table->foreign('emission_id')->references('id')->on('emissions');
            $table->integer('format_id')->unsigned();
            $table->foreign('format_id')->references('id')->on('formats');
            $table->text('details')->nullable();
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
        Schema::drop('eplays');
    }
}
