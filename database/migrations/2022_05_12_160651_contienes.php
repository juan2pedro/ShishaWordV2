<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Contienes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contienes', function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->bigIncrements('id');
            $table->bigInteger('mezcla_id')->unsigned();
            $table->bigInteger('sabore_id')->unsigned();
            $table->Integer('porcentaje');
            $table->timestamps();

            $table->foreign('mezcla_id')->references('id')->on('mezclas')->onDelete("cascade");
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
