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
        Schema::create('service_opinions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->foreign('service_id')->references('id')->on('service_opinions');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('service_opinions');
            // $table->foreignId('service_id')->constrained();
            // $table->foreignId('user_id')->constrained();
            $table->text('content');
            $table->integer('stars');
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
        Schema::dropIfExists('service_opinions');
    }
};
