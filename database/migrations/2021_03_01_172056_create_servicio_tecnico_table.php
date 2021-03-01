<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicioTecnicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_tecnico', function (Blueprint $table) {
            $table->id();
            $table->string('user');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->string('dispositivo');
            $table->string('marca')->nullable();
            $table->string('modelo')->nullable();
            $table->string('problema');
            $table->text('descripcion');
            $table->string('estado');
            $table->string('afiliado');
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
        Schema::dropIfExists('servicio_tecnico');
    }
}
