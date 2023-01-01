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
        Schema::create('apprenant_brief', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apprenant_id')->unsigned();
            $table->bigInteger('brief_id')->unsigned();
            $table->foreign('apprenant_id')->references('id')->on('apprenant')->onDelete('cascade');
            $table->foreign('brief_id')->references('id')->on('briefs')->onDelete('cascade');
            $table->date('dateDebut');
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
        Schema::dropIfExists('apprenant_brief');
    }
};
