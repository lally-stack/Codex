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
        Schema::create('contatti', function (Blueprint $table) {
            $table->id('idContatto');
            $table->unsignedBigInteger('idIndirizzo');
            $table->unsignedBigInteger('idRecapito');
            $table->unsignedBigInteger('idNazione');
            $table->string('nome', 45)->nullable();
            $table->string('cognome', 45);
            $table->string('email', 45);
            $table->unsignedTinyInteger('sesso')->unsigned()->nullable();
            $table->string('citta', 45);
            $table->string('provincia', 45);
            $table->string('dataDiNascita', 45);
            $table->unsignedBigInteger('idStato')->unsigned(); // attivo 1 - non attivo 0
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('idNazione')->references('idNazione')->on('nazioni');
            $table->foreign('idIndirizzo')->references('idIndirizzo')->on('indirizzi');
            $table->foreign('idRecapito')->references('idRecapito')->on('recapiti');
            $table->foreign('idStato')->references('idStato')->on('contatti_stati');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatti');
    }
};
