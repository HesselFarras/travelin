<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAirlinesTable extends Migration
{
    public function up(): void
    {
        Schema::create('airlines', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nama maskapai
            $table->string('code')->unique(); // Kode maskapai (misal: GA untuk Garuda)
            $table->string('country'); // Negara asal
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
}
