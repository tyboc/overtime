<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->increments('id');
	        $table->integer('matricula')->unique();
            $table->smallInteger('plaza');
            $table->string('apellidoP',50);
            $table->string('apellidoM',50);
            $table->string('nombre',50);
            $table->string('categoria',50);
            $table->string('horario',30);
            $table->string('descansos',50);
            $table->string('turno',50);
            $table->string('password',100);
            $table->charset = 'utf8mb4';
            $table->collation = 'utf8mb4_spanish_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuario');
    }
}
