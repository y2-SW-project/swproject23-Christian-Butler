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
        Schema::create('venue', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('location');
            $table->bigInteger('artist_id')->unsigned();
            $table->bigInteger('events_id')->unsigned();
            $table->timestamps();

            $table->foreign('events_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('artist_id')->references('id')->on('artist')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('venue_');
    }
};
