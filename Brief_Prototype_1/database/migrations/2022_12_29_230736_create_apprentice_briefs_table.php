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
        Schema::create('apprentice_briefs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_brief');
            $table->unsignedBigInteger('id_aprentice');
            $table->foreign('id_brief')->references('id')->on('briefs')
                ->Constrained()->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_aprentice')->references('id')->on('apprentices')
                ->Constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->date('assigned_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprentice_briefs');
    }
};
