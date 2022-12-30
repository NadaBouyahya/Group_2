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
        Schema::create('apprenant_taches', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apprenant_id')->unsigned();
            $table->bigInteger('tache_id')->unsigned();
            $table->foreign('apprenant_id')->references('id')->on('apprenant')->onDelete('cascade');
            $table->foreign('tache_id')->references('id')->on('taches')->onDelete('cascade');
            $table->boolean('state')->nullable();
            $table->dateTime('dateDebut');
            $table->dateTime('dateFin');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_taches');
    }
};
