<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
          $table->increments('id');

          $table->integer('dentista_id')->unsigned()->index();

          $table->foreign('dentista_id')->references('id')->on('dentistas')->onDelete('cascade');

          $table->integer('cliente_id')->unsigned()->index();

          $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');

          $table->enum('tipo',['orcamento','operacao','manutencao','montagem']);

          $table->double('preco',8,2);

          $table->enum('estado', ['pendente','executada']);

          $table->date('agendada_para');

          $table->time('hora_agendada');

          $table->timestamps();;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
