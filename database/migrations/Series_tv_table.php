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
        Schema::create('series_tv', function (Blueprint $table) {
            $table->id('idSerieTv');
            $table->unsignedBigInteger('idCategoriaSerie');
            $table->string('titolo', 255);
            $table->string('descrizione', 1000);
            $table->unsignedTinyInteger('totStagioni');
            $table->unsignedTinyInteger('numEpisodi');
            $table->string('regista', 45);
            $table->string('attori', 255);
            $table->string('annoInizio', 10);
            $table->string('annoFine', 10);
            $table->timestamps();

            $table->foreign('idCategoriaSerie')->references('idCategoria')->on('categorie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series_tv');
    }
};
