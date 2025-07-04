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
            // Set a default value for the 'code' column
            $table->string('code')->default('UNKNOWN')->change();
        });
    }
    
    public function down()
    {
        Schema::table('airlines', function (Blueprint $table) {
            // Remove the default value if rolling back
            $table->string('code')->default(null)->change();
        });
    }
    
};
