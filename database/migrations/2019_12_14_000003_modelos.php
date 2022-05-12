<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Modelos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modelos', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('marca_id')->unsigned();
            $table->datetime('fecha');
            $table->String('nombre');
            $table->String('color');
            $table->String('detalles');
            $table->boolean('base')->default(0);
            $table->string('imagenes');
            $table->Integer('precio');
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
