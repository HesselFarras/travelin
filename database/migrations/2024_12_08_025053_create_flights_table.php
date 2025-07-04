<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    public function up(): void
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('airline_id'); // ID maskapai
            $table->string('flight_number')->unique(); // Nomor penerbangan
            $table->string('origin'); // Kota asal (misal: CGK untuk Jakarta)
            $table->string('destination'); // Kota tujuan (misal: DPS untuk Bali)
            $table->time('departure_time'); // Jam keberangkatan
            $table->time('arrival_time'); // Jam kedatangan
            $table->decimal('price', 10, 2); // Harga tiket
            $table->timestamps();

            // Foreign key
            $table->foreign('airline_id')->references('id')->on('airlines')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flights');
    }
}
