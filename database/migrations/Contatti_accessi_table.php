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
        Schema::create('contatti_accessi', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idContatto');
            $table->unsignedTinyInteger('autenticato');
            $table->string('ip', 15);
            $table->timestamps();

            $table->foreign('idContatto')->references('idContatto')->on('contatti');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contatti_accessi');
    }
};
