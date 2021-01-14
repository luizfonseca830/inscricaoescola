<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipotelaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipotela', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 100);
            $table->string('nome_anexo_mostrar', 250)->unique()->nullable();
            $table->string('nome_ou_anexo', 250)->unique()->nullable();
            $table->boolean('status_liberar')->default(0);
            $table->dateTime('data_inicial')->nullable();
            $table->dateTime('data_final')->nullable();
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
        Schema::dropIfExists('tipotela');
    }
}
