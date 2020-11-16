<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnexoCursoTecnico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anexoCursoTecnico', function($table)
        {
            $table->id();
            $table->unsignedBigInteger('anexo_id');
            $table->string('descricacao', 255)->nullable();
            $table->string('nome_instituicacao', 255)->nullable();
            $table->integer('carga_horaria')->nullable();
            $table->string('anexo', 255)->nullable();
            $table->timestamps();

            $table->foreign('anexo_id')->references('id')->on('anexo');
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
        Schema::dropIfExists('anexoCursoTecnico');
    }
}
