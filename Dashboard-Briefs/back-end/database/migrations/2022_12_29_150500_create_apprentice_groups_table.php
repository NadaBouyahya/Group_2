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
        Schema::create('apprentice_groupes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('apprentice_id')->unsigned();
            $table->bigInteger('groupe_id')->unsigned()->nullable();
            $table->foreign('apprentice_id')->references('id')->on('apprentices')->onDelete('cascade');
            $table->foreign('groupe_id')->references('id')->on('groupes')->onDelete('set null');
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
        Schema::dropIfExists('apprentice_groups');
    }
};
