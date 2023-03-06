<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('artist', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('genre');
            $table->date('date of birth');
            $table->bigInteger('venue_id')->unsigned();
            $table->bigInteger('events_id')->unsigned();
            $table->timestamps();

            $table->foreign('venue_id')->references('id')->on('venue')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('events_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artist');
    }
};
