<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarbeiroTable extends Migration
{
    public function up()
    {
        Schema::create('barbeiro', function (Blueprint $table) {
            $table->id('id_barbeiro');
            $table->string('nome', 30);
            $table->string('especialidade', 20);
            $table->unsignedBigInteger('id_agenda');
            $table->foreign('id_agenda')->references('id')->on('agenda')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('barbeiro');
    }
};
