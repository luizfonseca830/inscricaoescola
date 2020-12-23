<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Escolaridade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('escolaridade', function(Blueprint $table)
        {
            $table->engine = 'InnoDB';
            $table->id();
            $table->unsignedBigInteger('modulo_id')->nullable();
            $table->string('nivel_escolaridade', 100);

            $table->foreign('modulo_id')->references('id')->on('modulo');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('escolaridade');
    }
}
