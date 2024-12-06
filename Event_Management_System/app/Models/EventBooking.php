<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name', 'user_name', 'email', 'phone', 'booking_date', 'status'
    ];
}
