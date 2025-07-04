<?php

// database/migrations/xxxx_xx_xx_create_reservations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->date('check_in');
            $table->date('check_out');
            $table->integer('rooms');
            $table->decimal('total_price', 10, 2);
            $table->string('status')->default('Pending');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('Unpaid');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
