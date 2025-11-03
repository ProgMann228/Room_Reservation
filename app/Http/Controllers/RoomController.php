<?php

namespace App\Http\Controllers;

use App\Services\RoomService;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    protected $service;

    public function __construct(RoomService $service){
        $this->service = $service;
    }
    public function filter(Request $request){    //GET /api/rooms/filter?capacity=10&has_projector=1

        return $this->service->filter($request);
    }
}
