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
        Schema::create('restaurant_settings', function (Blueprint $table) {
            $table->id();
            $table->time('opening_time');
            $table->time('closing_time');
            $table->unsignedInteger('max_guests_per_slot');
            $table->unsignedInteger('reservation_duration'); // بالدقائق
            $table->unsignedInteger('buffer_time')->default(15); // دقائق بين الحجوزات
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurant_settings');
    }
};
