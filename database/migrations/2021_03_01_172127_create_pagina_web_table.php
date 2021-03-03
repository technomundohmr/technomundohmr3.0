<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaginaWebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagina_webs', function (Blueprint $table) {
            $table->id();
            $table->string('usuario');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('email');
            $table->string('tipoNegocio');
            $table->text('servicioDetallado');
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
        Schema::dropIfExists('pagina_web');
    }
}
