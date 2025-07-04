<?php

// app/Models/Reservation.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'hotel_id',
        'name',
        'email',
        'check_in',
        'check_out',
        'rooms',
        'total_price',
        'status',
        'payment_method',
        'payment_status',
    ];

    // Relasi dengan hotel
    public function hotel()
    {
        return $this->belongsTo(Hotel::class);
    }
}
