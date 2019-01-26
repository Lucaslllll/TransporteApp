<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocalidadeHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localidade__horarios', function (Blueprint $table) {
            $table->integer('localidade_id')->unsigned();
            $table->foreign('localidade_id')->references('id')->on('localidades');

            $table->integer('horario_id')->unsigned();
            $table->foreign('horario_id')->references('id')->on('horarios');

            $table->primary(['localidade_id', 'horario_id']);
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
        Schema::dropIfExists('localidade__horarios');
    }
}
