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
            $table->bigInteger('venues_id')->unsigned();
            $table->bigInteger('artist_id')->unsigned();
            $table->timestamps();

            $table->foreign('venues_id')->references('id')->on('venues')->onUpdate('cascade')->onDelete('restrict');
            $table->foreign('artist_id')->references('id')->on('artists')->onUpdate('cascade')->onDelete('restrict');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');

        $table->dropForeign(['venues_id']);
        $table->dropColumn('venues_id');


        $table->dropForeign(['artist_id']);
        $table->dropColumn('artist_id');


    }
};
