<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'booking';

    protected $fillable = [
        'room_id',
        'user_name',
        'date',
        'start_time',
        'end_time',
        'purpose',
    ];
    public function room(){
        return $this->belongsTo('App\Models\Room');
    }
}
