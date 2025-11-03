<?php

namespace App\Services;

use App\Models\Room;
use App\Models\Booking;

class RoomService
{
    public function filter($request){

        $query = Room::query();

        if($request->has('capacity')){
            $query->where('capacity','>=',$request->capacity);
        }

        if($request->has('has_projector')){
            $query->where('has_projector',$request->has_projector);
        }

        if($request->has('has_whiteboard')){
            $query->where('has_whiteboard',$request->has_whiteboard);
        }

        $query->orderBy('capacity','desc')
                ->orderBy('has_projector','desc')
                ->orderBy('has_whiteboard', 'desc');

        return $query->get();
    }

}
