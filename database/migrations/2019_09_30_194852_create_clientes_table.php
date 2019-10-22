<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->string('cuentaUsuario',15)->primary();
            $table->string('direccion',70);
            $table->string('ciudad',50);
            $table->string('estado',30);
            $table->string('telCelular',10)->nullable();
            $table->string('telCasa',10)->nullable();

            $table->foreign('cuentaUsuario')
                ->references('cuentaUsuario')
                ->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
