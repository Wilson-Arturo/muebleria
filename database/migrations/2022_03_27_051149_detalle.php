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
        Schema::create('detalle', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_producto');
            $table->unsignedBigInteger('id_venta');
            $table->integer('cantidad');
            
            //declaracion de las llaves foraneas
            $table->foreign('id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('id_venta')->references('id_venta')->on('venta')->onDelete('cascade');
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
};
