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
        Schema::create('contatti_ruoli_contatti_abilita', function (Blueprint $table) {
            $table->id('id');
            $table->unsignedBigInteger('idContattoAbilita');
            $table->unsignedBigInteger('idContattoRuolo');
            $table->timestamps();

            $table->foreign('idContattoAbilita')->references('idContattoAbilita')->on('contatti_abilita');
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
        Schema::dropIfExists('contatti_ruoli_contatti_abilita');
    }
};
