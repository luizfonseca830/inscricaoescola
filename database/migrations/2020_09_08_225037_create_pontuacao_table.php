<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePontuacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pontuacao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('avaliador_id')->nullable();
            $table->unsignedBigInteger('aprovador_id')->nullable();
            $table->boolean('avaliar_cpfDef');
            $table->boolean('avaliar_escolaridade');
            $table->string('pontuacao_total', 100)->nullable();
            $table->timestamps();

            $table->foreign('avaliador_id')->references('id')->on('users');
            $table->foreign('aprovador_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pontuacao');
    }
}
