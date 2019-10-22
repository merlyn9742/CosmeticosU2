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
            $table->smallIncrements('idProducto');
            $table->smallInteger('idLinea',false,2);
            $table->smallInteger('idTipo',false,2);
            $table->string('registradoPor',15);
            $table->string('nombre', 30);
            $table->string('descripcion', 255);
            $table->string('color', 25)->nullable();
            $table->string('imagen', 255);
            $table->double('precio', 4,2);
            $table->integer('stock');
            $table->timestamps();

            $table->foreign('idLinea')
                ->references('idLinea')
                ->on('lineas');

            $table->foreign('idTipo')
                ->references('idTipo')
                ->on('tipos');

            $table->foreign('registradoPor')
                ->references('cuentaUsuario')
                ->on('administradores');
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
