<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('matricula');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            
            // //llaves foraneas
            //  $table->unsignedBigInteger('salones_id');
            //  $table->foreign('salones_id')->references('id')->on('salons');

            // $table->unsignedBigInteger('materia_id');
            // $table->foreign('materia_id')->references('id')->on('materias');
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
        //
    }
}
