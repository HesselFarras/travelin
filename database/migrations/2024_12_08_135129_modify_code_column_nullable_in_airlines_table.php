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
        Schema::table('airlines', function (Blueprint $table) {
            // Make the 'code' column nullable
            $table->string('code')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('airlines', function (Blueprint $table) {
            // Revert the column to non-nullable
            $table->string('code')->nullable(false)->change();
        });
    }
    
};
