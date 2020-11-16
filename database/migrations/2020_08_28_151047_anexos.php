<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Anexos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('anexo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('documento_pessoas', 255);
            $table->string('anexo_escolaridade', 255);
            $table->string('anexo_deficiencia', 255)->nullable()->default(null);;
            $table->string('extra', 500)->nullable()->default(null);
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
        Schema::dropIfExists('anexos');
    }
}
