<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\Room;

class BookingService
{
    public function time_checking($room_id, $date, $start_time, $end_time){
        $count = Booking::where('room_id', $room_id)
            ->where('date', $date)
            ->where(function ($query) use ($start_time, $end_time) {
                $query->where('start_time', '<=', $end_time)
                    ->where('end_time', '>=', $start_time);
            })
            ->count();

        if($count > 0){
            return false;
        }
        else return true;
    }
    public function create(array $data){

        if (!$this->time_checking($data['room_id'], $data['date'], $data['start_time'], $data['end_time'])) {
            return false;
        }

        return Booking::create($data);

    }
    public function show($date){
        $booking = Booking::select('date', 'user_name', 'start_time', 'end_time', 'purpose')
            ->where('date', $date)
            ->orderBy('start_time')
            ->get();

        return $booking;
    }
    public function delete($booking_id){

        $bookind = Booking::find($booking_id);

        if ($bookind) {
            $bookind->delete();
            return true;
        }
        return false;
    }
    public function calendar(){
        $data = Booking::select('id', 'room_id', 'date', 'user_name', 'start_time', 'end_time', 'purpose')
            ->orderBy('date')
            ->orderBy('start_time')
            ->get();

        return $data;
    }
    public function auto_cancel(){
        $updated = Booking::where('date', '<', now()->subDays(30))
            ->delete();
    }
}
