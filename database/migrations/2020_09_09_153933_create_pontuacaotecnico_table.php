<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePontuacaotecnicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontuacaotecnico', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pontuacao_id');
            $table->unsignedBigInteger('anexo_id');
            $table->float('pontuacao');
            $table->timestamps();

            $table->foreign('pontuacao_id')->references('id')->on('pontuacao');
            $table->foreign('anexo_id')->references('id')->on('anexoCursoTecnico');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pontuacaotecnico');
    }
}
