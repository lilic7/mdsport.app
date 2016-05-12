<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmodelProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emodel_programs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('emodel_id')->unsigned();
            $table->foreign('emodel_id')->references('id')->on("emodels");
            $table->integer('weekday');
            $table->time('hour');
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
        Schema::drop('emodel_programs');
    }
}
