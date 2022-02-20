<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animais', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_usuario')->constrained('usuarios');
            $table->foreignId('id_situacao')->constrained('situacoes');
            $table->foreignId('id_tipo')->constrained('tipos');
            $table->foreignId('id_exclusao')->constrained('exclusoes');
            $table->foreignId('id_porte')->constrained('portes');
            $table->string('name', 128);
            $table->integer('idade');
            $table->string('descricao', 1048);
            $table->char('castrado', 1);
            $table->jsonb('vacinas');
            $table->smallInteger('preco');
            $table->char('sexo', 1);
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
        Schema::dropIfExists('animais');
    }
}
