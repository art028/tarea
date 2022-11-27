<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('idLibro');
            $table->char('isbn');
            $table->string('titulo');
            $table->unsignedBigInteger('autor_id');
            $table->integer('paginas');
            $table->string('editorial');
            $table->string('correo');
            $table->timestamps();
            $table->foreign('autor_id')->references('idAutor')->on('autores')->onDelete('cascade');
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
    }
};
