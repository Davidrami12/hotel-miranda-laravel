<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffersController extends Controller
{
    public function index()
    {
        $roomsWithOffers = DB::table('rooms')
            ->leftJoin('rooms_images', 'rooms.room_id', '=', 'rooms_images.room_id')
            ->where('rooms.offer', 1)
            ->select('rooms.*', DB::raw('MIN(rooms_images.url_image) as image_url'))
            ->groupBy('rooms.room_id')
            ->get();

        return view('offers', ['rooms' => $roomsWithOffers]);
    }
}
