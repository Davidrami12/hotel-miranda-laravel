<?php

namespace App\Http\Controllers;
use App\Models\Rooms;
use App\Models\RoomImages;

use Illuminate\Http\Request;
use DB;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = Rooms::with('images')->get();

        if ($rooms->isEmpty()) {
            return "No rooms found";
        }

        return view('rooms', ['rooms' => $rooms]);
    }

    public function show($id)
    {
        $room = Rooms::with(['images' => function($query) {
            $query->orderBy('url_image')->first();
        }])->findOrFail($id);

        return view('room-details', ['room' => $room]);
    }

}