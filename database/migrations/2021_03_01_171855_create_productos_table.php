<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('categoria');
            $table->text('descripcion');
            $table->text('contenido');
            $table->text('caracteristicas');
            $table->string('linkYoutube');
            $table->string('imgMain');
            $table->string('img0');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->boolean('oferta');
            $table->boolean('premiun');
            $table->integer('precio');
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
}
