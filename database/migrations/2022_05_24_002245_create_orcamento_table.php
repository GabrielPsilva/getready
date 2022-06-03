<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrcamentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orcamentos', function (Blueprint $table) {
            $table->id();
            $table->integer('celular_id');
            $table->string('nome');
            $table->string('email');
            $table->string('cpf');
            $table->string('telefone');
            $table->string('ano');
            $table->float('valor_total')->nullable();
            $table->float('valor_parcela')->nullable();
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
        Schema::dropIfExists('orcamento');
    }
}
