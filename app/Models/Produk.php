<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel (jika tidak mengikuti konvensi Laravel)
    protected $table = 'produks';

    // Kolom-kolom yang dapat diisi
    protected $fillable = ['nama', 'quantity', 'description'];
}
