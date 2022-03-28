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
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_categoria');
            $table->string('nombre');
            $table->integer('costo');
            $table->string('descripcion');
            $table->integer('codigo_barras');
            $table->integer('stock');
            
            //declaracion de las llaves foraneas
            $table->foreign('id')->references('id_categoria')->on('categoria')->onDelete('cascade');
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
        Schema::dropIfExists('productos');
    }
};
