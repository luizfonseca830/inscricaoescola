<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePontuacaoexperienciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontuacaoexperiencia', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pontuacao_id');
            $table->unsignedBigInteger('anexo_id');
            $table->string('pontuacao', 100);
            $table->timestamps();

            $table->foreign('pontuacao_id')->references('id')->on('pontuacao');
            $table->foreign('anexo_id')->references('id')->on('anexoExperiencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pontuacaoexperiencia');
    }
}
