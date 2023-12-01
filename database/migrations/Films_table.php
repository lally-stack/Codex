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
        Schema::create('films', function (Blueprint $table) {
            $table->id('idFilm');
            $table->unsignedBigInteger('idCategoriaFilm');
            $table->string('titolo', 255);
            $table->string('descrizione', 1000);
            $table->string('durata', 45);
            $table->string('regista', 45);
            $table->string('attori', 255);
            $table->string('anno', 10);
            $table->timestamps();

            $table->foreign('idCategoriaFilm')->references('idCategoria')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
};
