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
            $table->unsignedBigInteger('comprovante_id')->nullable();
            $table->string('nome_completo');
            $table->string('cpf')->unique();
            $table->string('rg', 15);
            $table->string('orgao_emissor');
            $table->string('pis', '15');
            $table->string('telefone');
            $table->string('nacionalidade', 100);
            $table->string('naturalidade');
            $table->date('data_nascimento');
            $table->string('sexo');
            $table->string('email');
            $table->boolean('portador_deficiencia');

            $table->foreign('escolaridade_id')->references('id')->on('escolaridade');
            $table->foreign('comprovante_id')->references('id')->on('comprovante');
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
