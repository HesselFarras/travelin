<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'bookings';

    // Tentukan kolom yang dapat diisi secara massal (Mass Assignment)
    protected $fillable = [
        'flight_id',             // ID penerbangan yang dipesan
        'passenger_name',        // Nama penumpang
        'passenger_email',       // Email penumpang
        'payment_method',        // Metode pembayaran (e.g., Kartu Kredit, Transfer Bank)
        'payment_status',        // Status pembayaran (e.g., Sudah Dibayar, Belum Dibayar)
        'total_price',           // Total harga yang dibayar untuk tiket
        'passengers_count',      // Jumlah penumpang
    ];

    // Relasi dengan Flight (satu booking terkait dengan satu flight)
    public function flight()
    {
        return $this->belongsTo(Flight::class); // Flight yang dipesan
    }
}
