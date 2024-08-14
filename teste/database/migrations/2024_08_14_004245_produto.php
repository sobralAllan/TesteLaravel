<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('Produtos', function(Blueprint $table){
            $table->id();
            $table->string('nome');
            $table->text('descricao');
            $table->double('preco', 10, 2);
            $table->string('titulo');
            $table->string('imagem')->nullable();//Caminho da imagem
            
            $table->unsignedBigInteger('id_users');//Chave estrangeira
            $table->foreign('id_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
            $table->unsignedBigInteger('id_categoria');//Chave estrangeira
            $table->foreign('id_categoria')->references('id')->on('categorias')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();//Horário e data de inserção e atualização de um registro
        });//fim do create
    }//fim do up

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
