<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnexoExperiencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anexoExperiencia', function($table)
        {
            $table->id();
            $table->unsignedBigInteger('anexo_id');
            $table->string('cargo', 255)->nullable();
            $table->string('empregador', 255)->nullable();
            $table->string('nome_supervisor', 255)->nullable();
            $table->date('data_entrada')->nullable();
            $table->date('data_saida')->nullable();
            $table->string('atribuicoes', 255)->nullable();
            $table->string('anexo', 255)->nullable();
            $table->foreign('anexo_id')->references('id')->on('anexo');
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
        //
        Schema::dropIfExists('anexoExperiencia');
    }
}
