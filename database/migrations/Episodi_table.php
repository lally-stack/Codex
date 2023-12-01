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
        Schema::create('episodi', function (Blueprint $table) {
            $table->id('idEpisodio');
            $table->unsignedBigInteger('idSerieTv');
            $table->string('titolo', 255);
            $table->string('descrizione', 1000);
            $table->unsignedTinyInteger('numStagione');
            $table->unsignedTinyInteger('numEpisodio');
            $table->string('durata', 10);
            $table->timestamps();

            $table->foreign('idSerieTv')->references('idSerieTv')->on('series_tv');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodi');
    }
};
