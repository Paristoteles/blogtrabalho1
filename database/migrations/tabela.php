<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $tabela) {
            $tabela->id();
            $tabela->string('titulo', 200);
            $tabela->text('imagem');
            $tabela->text('descricao');
        });
    }

