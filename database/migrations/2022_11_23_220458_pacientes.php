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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->engine="InnoDB"; 
            $table->bigIncrements('id');
            $table->bigInteger('sexos_id')->unsigned();
            $table->bigInteger('estadociviles_id')->unsigned();
            $table->bigInteger('departamentos_id')->unsigned();
            $table->bigInteger('municipios_id')->unsigned();
            $table->bigInteger('familiares_id')->unsigned();

            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('tercer_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('apellido_casada');
            $table->string('dui');
            $table->string('fecha_nacimiento');
            $table->string('telefono');
            $table->string('direccion');
            
            $table->timestamps();


            $table->foreign('sexos_id')->references('id')->on('sexos')->onDelete("cascade");
            $table->foreign('estadociviles_id')->references('id')->on('estadociviles')->onDelete("cascade");
            $table->foreign('departamentos_id')->references('id')->on('departamentos')->onDelete("cascade");
            $table->foreign('municipios_id')->references('id')->on('municipios')->onDelete("cascade");
            $table->foreign('familiares_id')->references('id')->on('familiares')->onDelete("cascade");
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
