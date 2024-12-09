<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['event_name', 'event_description'];

    public function eventBookings()
    {
        return $this->hasMany(EventBooking::class);
    }
}

