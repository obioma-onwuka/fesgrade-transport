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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('departing_state');
            $table->string('terminal');
            $table->string('destination');
            $table->string('trip_date');
            $table->string('no_of_adults');
            $table->string('no_of_children');
            $table->string('vehicle_type');
            $table->string('price');
            $table->string('seat_no');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
