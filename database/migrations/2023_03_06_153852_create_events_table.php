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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            
            $table->date('date');
            $table->time('start_time');
            $table->bigInteger('venue_id')->unsigned();
            $table->bigInteger('artist_id')->unsigned();
            $table->timestamps();

            $table->foreign('venue_id')->references('id')->on('venue')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('artist_id')->references('id')->on('artist')->onUpdate('cascade')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
