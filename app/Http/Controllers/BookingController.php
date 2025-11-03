<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Services\BookingService;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    protected $service;

    public function __construct(BookingService $service){
        $this->service = $service;
    }
    public function create(BookingRequest $request){

        $validated = $request->validated();
        $data = $this->service->create($validated);

        if(!$data){
            return response()->json([
                'message' => 'Time is already taken',
            ],409);
        }
        return response()->json([
            'message' => 'Your booking has been created',
            'booking' => $data
        ],201);
    }
    public function show($date){
        $data = $this->service->show($date);

        return response()->json([
            "message" => "All bookings for {$date}",
            "bookings" => $data
        ]);
    }
    public function delete($booking_id){

        if($this->service->delete($booking_id)){
            return response()->json([
                "message" => "Booking has been deleted"
            ]);
        }

        return response()->json([
            "message" => "Not such booking"
        ]);
    }
    public function calendar(){
        $data = $this->service->calendar();

        return response()->json([
            "Calendar" => $data
        ]);
    }
    public function auto_cancel(){

        return $this->service->auto_cancel();
    }
}
