<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPaymentStatusToBookingsTable extends Migration
{
    /**
     * Jalankan migration untuk menambahkan kolom.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasColumn('bookings', 'payment_status')) {
            Schema::table('bookings', function (Blueprint $table) {
                $table->string('payment_status')->default('unpaid');
            });
        }
    }

    /**
     * Balikkan migration untuk menghapus kolom.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('payment_status');
        });
    }
}