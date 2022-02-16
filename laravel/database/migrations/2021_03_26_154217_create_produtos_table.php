<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('SKU');
            $table->string('produto');
            $table->integer('quantidade');
            $table->integer('sistema');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('produtos');
    }
}
