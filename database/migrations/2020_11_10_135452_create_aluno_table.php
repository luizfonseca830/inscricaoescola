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
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('comprovante_id')->nullable();
            $table->string('nome_aluno');
            $table->string('nome_mae');
            $table->string('cpf_mae')->unique();
            $table->string('telefone_mae');
            $table->string('nome_pai');
            $table->string('cpf_pai')->unique();
            $table->string('telefone_pai');
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
