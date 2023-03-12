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
        Schema::create('events_event_types', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('events_id');
            $table->unsignedBigInteger('event_type_id');

            $table->foreign('events_id')->references('id')->on('events')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('event_type_id')->references('id')->on('event_type')->onUpdate('cascade')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_event_types');
        
    }
};
