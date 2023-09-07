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
}