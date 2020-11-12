<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TablaPrueba extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabla_prueba', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('informe')->nullable();
            $table->string('confirmacion')->nullable();
            $table->string('grado')->nullable();
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
