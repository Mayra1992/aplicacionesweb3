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
        Schema::create('actividad', function (Blueprint $table) {
             $table->id('actividad_id');
            $table->unsignedBigInteger('informe_id')->nullable();
            $table->date('fecha_actividad')->nullable();
            $table->string('indicador_gestion')->nullable();
            $table->string('parametro_gestion')->nullable();
            $table->text('acciones')->nullable();
            $table->text('resultado')->nullable();
            $table->decimal('estado', 8, 2)->nullable();
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
        Schema::dropIfExists('actividad');
    }
};
