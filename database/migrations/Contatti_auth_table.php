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
        Schema::create('contatti_auth', function (Blueprint $table) {
            $table->id('idAuth');
            $table->unsignedBigInteger('idContatto');
            $table->string('user', 255);
            $table->integer('sfida');
            $table->string('secretJWT', 255);
            $table->integer('inizioSfida');
            $table->timestamps();
            $table->softDeletes();

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
        Schema::dropIfExists('contatti_auth');
    }
};
