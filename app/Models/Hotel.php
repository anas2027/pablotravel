<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = [
        'Name',
        'Rate',
        'Address',
        'phone',
        'descrption',
        'hotel_image',
    ],
    $table = 'hotel';
    use HasFactory;
}
