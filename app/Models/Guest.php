<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    //

    public function reservations()
{
    return $this->belongsToMany(Reservation::class, 'guest_reservation');
}
}
