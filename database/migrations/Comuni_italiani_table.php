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
        Schema::create('comuni_italiani', function (Blueprint $table) {
            // $table->id('idComune');
            // $table->string('nome', 45);
            // $table->string('regione', 45);
            // $table->string('provincia', 45);
            // $table->string('void');
            // $table->integer('codiceComune');
            // $table->string('col8');
            // $table->string('col9');
            // $table->unsignedMediumInteger('cap');
            // $table->string('col11');
            // $table->string('col12');
            // $table->string('siglaProvincia', 2);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comuni_italiani');
    }
};
