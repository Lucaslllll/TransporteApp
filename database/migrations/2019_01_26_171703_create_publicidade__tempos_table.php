<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublicidadeTemposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicidade__tempos', function (Blueprint $table) {
            $table->integer('publicidade_id')->unsigned();
            $table->foreign('publicidade_id')->references('id')->on('publicidades');

            $table->integer('tempo_id')->unsigned();
            $table->foreign('tempo_id')->references('id')->on('tempos');

            $table->primary(['publicidade_id', 'tempo_id']);
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
        Schema::dropIfExists('publicidade__tempos');
    }
}
