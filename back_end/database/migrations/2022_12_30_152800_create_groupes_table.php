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
        Schema::create('groupes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('logo');
            $table->bigInteger('anneeformation_id')->unsigned();
            $table->bigInteger('formateur_id')->unsigned();
            $table->foreign('anneeformation_id')->references('id')->on('anneeformation')->onUpdate('cascade');
            $table->foreign('formateur_id')->references('id')->on('formateur');
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
        Schema::dropIfExists('groupes');
    }
};
