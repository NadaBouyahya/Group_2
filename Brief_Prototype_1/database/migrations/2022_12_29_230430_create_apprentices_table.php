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
        Schema::create('apprentices', function (Blueprint $table) {
            $table->id();

            $table->string('fname');
            $table->string('lname');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('image');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprentices');
    }
};
