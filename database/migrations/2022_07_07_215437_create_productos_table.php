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
            $table->engine='InnoDB';
            $table->id();
            $table->string('imagen');
            $table->string('imagen_dos');
            $table->string('imagen_tres');
            $table->string('imagen_cuatro');
            $table->string('nombre');
            $table->string('descripcion');
            $table->bigInteger('id_marca')->unsigned();
            $table->bigInteger('id_categoria')->unsigned();
            $table->bigInteger('id_tipo_producto')->unsigned();
            $table->bigInteger('id_codigo')->unsigned();
            $table->string('precio');
            $table->string('stock');
            $table->timestamps();

            $table->foreign('id_marca')->references('id')->on('marcas')->onDelete('cascade');
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('id_tipo_producto')->references('id')->on('tipo_productos')->onDelete('cascade');
            $table->foreign('id_codigo')->references('id')->on('codigos')->onDelete('cascade');
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
