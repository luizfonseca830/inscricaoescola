<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('escolaridade_id');
            $table->unsignedBigInteger('serie_irmao_na_escola_id')->nullable();
            $table->unsignedBigInteger('serie_irmao_no_sorteio_id')->nullable();
            $table->unsignedBigInteger('comprovante_id')->nullable();
            $table->unsignedBigInteger('endereco_id');
            $table->string('nome_completo');
            $table->string('sexo');
            $table->date('data_nascimento');
            $table->string('idade');
            $table->string('escola_de_origem')->nullable();
            $table->string('irmaos_na_escola')->nullable();
            $table->string('nome_irmaos_na_escola')->nullable();
            $table->string('irmaos_no_sorteio')->nullable();
            $table->string('nome_irmaos_no_sorteio')->nullable();
            $table->string('responsavel');
            $table->string('cpf');
            $table->string('email');
            $table->string('telefone');
            $table->boolean('status_aprovado')->nullable();
            $table->foreign('escolaridade_id')->references('id')->on('escolaridade');
            $table->foreign('serie_irmao_na_escola_id')->references('id')->on('escolaridade');
            $table->foreign('serie_irmao_no_sorteio_id')->references('id')->on('escolaridade');
            $table->foreign('comprovante_id')->references('id')->on('comprovante');
            $table->foreign('endereco_id')->references('id')->on('endereco');
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
        Schema::dropIfExists('pessoa');
    }
}
