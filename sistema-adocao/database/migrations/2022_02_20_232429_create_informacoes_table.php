<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInformacoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('informacoes', function (Blueprint $table) {
            $table->id();
            $table->integer('idade');
            $table->string('logradouro', 256);
            $table->string('telefone_primario', 256);
            $table->string('telefone_secundario', 256);
            $table->string('complemento', 256);
            $table->string('cidade', 128);
            $table->string('estado', 128);
            $table->string('pais', 128);
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
        Schema::dropIfExists('informacoes');
    }
}
