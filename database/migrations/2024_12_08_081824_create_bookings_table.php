<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flight_id'); // Kolom untuk menyimpan ID penerbangan
            $table->string('passenger_name'); // Nama penumpang
            $table->string('passenger_email')->nullable(); // Email penumpang (opsional)
            $table->string('payment_method'); // Metode pembayaran
            $table->string('payment_status'); // Status pembayaran (paid/unpaid)
            $table->decimal('total_price', 10, 2); // Harga total tiket
            $table->integer('passengers_count'); // Jumlah penumpang
            $table->timestamps();

            // Menambahkan foreign key untuk flight_id
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}