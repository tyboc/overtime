<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Crypt;

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
            $table->smallInteger('plaza')->nullable();
            $table->string('apellidoP',50);
            $table->string('apellidoM',50);
            $table->string('nombre',50);
            $table->string('categoria',50);
            $table->string('horario',30)->nullable();
            $table->string('descansos',50)->nullable();
            $table->string('turno',50)->nullable();
            $table->string('foto',100)->nullable();
            $table->string('password',100)->default(bcrypt('user1234'));
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
