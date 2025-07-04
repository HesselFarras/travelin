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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name');     // Column for hotel name
            $table->text('description');      // Column for hotel description
            $table->string('location');       // Column for hotel location
            $table->decimal('rating', 2, 1);  // Column for hotel rating (e.g., 4.5)
            $table->decimal('price', 10, 2);  // Column for hotel price
            $table->boolean('available')->default(true);  // Column to indicate availability
            $table->timestamps();  // Automatically includes created_at and updated_at timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
