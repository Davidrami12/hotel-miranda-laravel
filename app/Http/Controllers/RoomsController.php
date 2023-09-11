<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RoomsController extends Controller
{
    public function index()
    {
        $rooms = DB::table('rooms')
            ->leftJoin('rooms_images', 'rooms.room_id', '=', 'rooms_images.room_id')
            ->select('rooms.*', DB::raw('MIN(rooms_images.url_image) as image_url'))
            ->groupBy('rooms.room_id')
            ->get();

        if ($rooms->isEmpty()) {
            return "No rooms found";
        }

        return view('rooms', ['rooms' => $rooms]);
    }

    public function show($id)
    {
        $room = DB::table('rooms')
            ->leftJoin('rooms_images', 'rooms.room_id', '=', 'rooms_images.room_id')
            ->where('rooms.room_id', $id)
            ->select('rooms.*', DB::raw('MIN(rooms_images.url_image) as image_url'))
            ->groupBy('rooms.room_id')
            ->first();

        if (!$room) {
            return redirect()->route('rooms.index')->with('error', 'Room not found.');
        }

        return view('room-details', ['room' => $room]);
    }
}