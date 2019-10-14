<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOvertime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('overtime', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
        
            $table->unsignedInteger('titular_id');
            $table->foreign('titular_id', 'fk_overtime_titular')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
        
            $table->unsignedInteger('sustituto_id');
            $table->foreign('sustituto_id', 'fk_overtime_sustituto')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
        
            $table->date('periodoDe');
            $table->date('periodoA');
            $table->string('motivo',50);
            $table->string('concepto',15);
            $table->string('servicio',50);
        
            $table->unsignedInteger('jefe_id');
            $table->foreign('jefe_id', 'fk_overtime_jefe')->references('id')->on('usuario')->onDelete('restrict')->onUpdate('restrict');
        
            $table->string('observaciones',100);
            
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
        Schema::dropIfExists('overtime');
    }
}
