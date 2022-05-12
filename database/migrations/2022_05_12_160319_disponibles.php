<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Disponibles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibles', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('materiale_id')->unsigned();
            $table->bigInteger('modelo_id')->unsigned();
            $table->timestamps();

            $table->foreign('materiale_id')->references('id')->on('materiales')->onDelete("cascade");
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete("cascade");
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
