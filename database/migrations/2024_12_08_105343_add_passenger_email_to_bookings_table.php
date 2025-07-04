<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('bookings', function (Blueprint $table) {
            if (!Schema::hasColumn('bookings', 'passenger_email')) {
                $table->string('passenger_email')->nullable();
            }
        });
    }
    
    public function down()
    {
        Schema::table('bookings', function (Blueprint $table) {
            $table->dropColumn('passenger_email');
        });
    }
};
