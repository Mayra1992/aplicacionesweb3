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
        Schema::create('informe', function (Blueprint $table) {
                        $table->id('informe_id');
            $table->unsignedBigInteger('docente_id')->nullable();
            $table->smallInteger('mes')->nullable();
            $table->date('informe_date')->nullable();
            $table->text('conclusiones')->nullable();
            $table->text('recomendaciones')->nullable();
            $table->integer('estado')->nullable();
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
        Schema::dropIfExists('informe');
    }
};
