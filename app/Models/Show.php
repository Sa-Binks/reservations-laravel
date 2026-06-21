<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Show extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'date',
        'bookable',
    ];

    public function reservations()
    {
        return $this->hasMany(\App\Models\Reservation::class);
    }
}