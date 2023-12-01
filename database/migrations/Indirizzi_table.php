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
        Schema::create('indirizzi', function (Blueprint $table) {
            $table->id('idIndirizzo');
            $table->unsignedBigInteger('idTipoIndirizzo');
            $table->unsignedBigInteger('idContattoInd');
            $table->unsignedBigInteger('idNazioneInd');
            $table->unsignedBigInteger('idComuneItaliano');
            $table->string('cap', 50);
            $table->string('indirizzo', 255);
            $table->string('civico', 50); 
            $table->timestamps();

            $table->foreign('idTipoIndirizzo')->references('idTipoIndirizzo')->on('tipo_indirizzi');
            $table->foreign('idContattoInd')->references('idContatto')->on('contatti');
            $table->foreign('idNazioneInd')->references('idNazione')->on('nazioni');
            $table->foreign('idComuneItaliano')->references('idComune')->on('comuni_italiani');
        });
    }

    /**
     * Reverse the migrations. 
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indirizzi');
    }
};
