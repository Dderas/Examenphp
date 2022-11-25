<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('familiares', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');
            $table->bigInteger('departamentos_id')->unsigned();
            $table->bigInteger('municipios_id')->unsigned();
            
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Parentesco');

            $table->timestamps();

            $table->foreign('departamentos_id')->references('id')->on('departamentos')->onDelete("cascade");
            $table->foreign('municipios_id')->references('id')->on('municipios')->onDelete("cascade");
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
};
