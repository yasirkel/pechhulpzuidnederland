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
        Schema::create('factuur', function (Blueprint $table) {
            $table->id();
            //$table->integer('user_id');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('garage_id')->references('id')->on('garages');
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
        Schema::dropIfExists('factuur');
    }
};
