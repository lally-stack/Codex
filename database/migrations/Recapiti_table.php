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
        Schema::create('recapiti', function (Blueprint $table) {
            $table->id('idRecapito'); 
            $table->unsignedBigInteger('idContattoRec');
            $table->unsignedBigInteger('idTipoRecapito');
            $table->string('recapito', 255);
            $table->timestamps();

            $table->foreign('idContattoRec')->references('idContatto')->on('contatti');
            $table->foreign('idTipoRecapito')->references('idTipoRecapito')->on('tipo_recapiti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recapiti');
    }
};
