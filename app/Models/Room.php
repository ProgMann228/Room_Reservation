<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'room';
    protected $fillable = [
        'name',
        'capacity',
        'floor',
        'has_projector',
        'has_whiteboard',
    ];
    public function booking(){
        return $this->hasMany('App\Models\Booking');
    }
}
