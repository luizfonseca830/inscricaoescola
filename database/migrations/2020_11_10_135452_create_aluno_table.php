<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlunoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('comprovante_id')->nullable();
            $table->unsignedBigInteger('serie_id')->nullable();
            $table->string('nome_aluno');
            $table->date('data_nascimento_aluno');
            $table->string('sexo_aluno');
            $table->string('nome_mae');
            $table->string('cpf_mae');
            $table->string('telefone_mae');
            $table->string('nome_pai');
            $table->string('cpf_pai');
            $table->string('telefone_pai');
            $table->string('nome_responsavel');
            $table->string('cpf_responsavel')->unique();
            $table->string('telefone_reponsavel');
            $table->string('email_responsavel');

            $table->foreign('serie_id')->references('id')->on('serie');
            $table->foreign('comprovante_id')->references('id')->on('comprovante');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aluno');
    }
}
