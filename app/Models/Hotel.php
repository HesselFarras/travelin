<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    // Define the fillable properties
    protected $fillable = [
        'hotel_name',   // Add hotel_name here
        'description',
        'location',
        'rating',
        'price',
        'available',
    ];
}