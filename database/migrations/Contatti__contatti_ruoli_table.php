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
        Schema::create('contatti__contatti_ruoli', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idContatto');
            $table->unsignedBigInteger('idContattoRuolo');
            $table->timestamps();

            $table->foreign('idContatto')->references('idContatto')->on('contatti');
            $table->foreign('idContattoRuolo')->references('idContattoRuolo')->on('contatti_ruoli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatti__contatti_ruoli');
    }
};
