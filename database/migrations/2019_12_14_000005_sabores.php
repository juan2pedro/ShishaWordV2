<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Sabores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sabores', function (Blueprint $table) {

            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('marca_id')->unsigned();
            $table->String('nombre');
            $table->String('detalles');
            $table->timestamps();

            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete("cascade");

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
