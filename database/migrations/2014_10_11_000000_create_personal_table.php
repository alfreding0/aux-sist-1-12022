<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->integer('ci'); //ci int
            $table->string('nombre', 100); //nombre varchar(100)
            $table->integer('celular'); //celular int
            $table->string('direccion', 300);   //direccion varchar(300)
            $table->date('fecha_nac'); //fecha_nac date
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
        Schema::dropIfExists('personal');
    }
}
