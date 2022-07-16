<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_venta', function (Blueprint $table) {
            $table->id();

            $table->integer('cantidad');
            $table->float('precio_unitario');
            $table->timestamps();

            $table->unsignedBigInteger('venta_id');
            $table->foreign('venta_id')->references('id')->on('venta');

            $table->unsignedBigInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_venta');
    }
}
