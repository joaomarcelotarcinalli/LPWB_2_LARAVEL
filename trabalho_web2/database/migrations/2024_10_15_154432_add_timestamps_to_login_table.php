<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToLoginTable extends Migration
{
    public function up()
    {
        Schema::table('login', function (Blueprint $table) {
            $table->timestamps(); // Adiciona as colunas created_at e updated_at
        });
    }

    public function down()
    {
        Schema::table('login', function (Blueprint $table) {
            $table->dropTimestamps(); // Remove as colunas
        });
    }
}
