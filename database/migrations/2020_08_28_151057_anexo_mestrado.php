<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AnexoMestrado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anexoMestrado', function($table)
        {
            $table->id();
            $table->unsignedBigInteger('anexo_id');
            $table->string('descricacao', 255)->nullable();
            $table->string('nome_instituicacao', 255)->nullable();
            $table->integer('carga_horaria')->nullable();
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
        Schema::dropIfExists('anexoMestrado');
    }
}
