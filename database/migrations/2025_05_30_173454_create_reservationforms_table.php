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
        Schema::create('reservationforms', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('table_id')->constrained()->onDelete('cascade');
            $table->string('email');
            $table->string('phone');
            // $table->integer('guest_number');
            $table->date('res_date');
            $table->time('res_time');
            $table->text('message')->nullable();
            $table->enum('upcoming_reservation', ['cancel', 'still_going'])->default('still_going');
            $table->enum('status', ['pending', 'approved', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservationforms');
    }
};
