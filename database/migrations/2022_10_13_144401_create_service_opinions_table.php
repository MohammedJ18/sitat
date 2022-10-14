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
            $table->foreignId('service_id')->references('id')->on('service_opinions');
            $table->foreignId('user_id')->references('id')->on('service_opinions');
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
