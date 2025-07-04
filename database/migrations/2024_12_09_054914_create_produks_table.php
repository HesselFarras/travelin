<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProduksTable extends Migration
{
    /**
     * Jalankan migrasi untuk membuat tabel 'produks'.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produks', function (Blueprint $table) {
            // Hanya ubah kolom jika sudah ada
            if (Schema::hasColumn('produks', 'name')) {
                $table->string('name')->nullable()->change();
            }
            $table->integer('quantity')->default(0);
            $table->text('description')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('produks', function (Blueprint $table) {
            if (Schema::hasColumn('produks', 'name')) {
                $table->dropColumn('name');
            }
        });
    }
    

}
