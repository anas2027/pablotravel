<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelRoom extends Model
{
    protected $fillable = [
        'name',
        'desctpion',
        'persone_count',
        'Rate',
        'rent_perday',
        'room_image',
        'hotel_id'
    ],
    $table = "hotel_rooms";
    use HasFactory;
}
