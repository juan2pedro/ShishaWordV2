<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Empaquetados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empaquetados', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('formato_id')->unsigned();
            $table->bigInteger('sabore_id')->unsigned();
            $table->timestamps();

            $table->foreign('formato_id')->references('id')->on('formatos')->onDelete("cascade");
            $table->foreign('sabore_id')->references('id')->on('sabores')->onDelete("cascade");
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
