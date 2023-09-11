<?php

namespace App\Http\Controllers;
use App\Models\Rooms;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OffersController extends Controller
{
    public function index()
    {
        $roomsWithOffers = Rooms::with(['images' => function($query) {
            $query->orderBy('url_image');
        }])
        ->where('offer', 1)
        ->get();

        return view('offers', ['rooms' => $roomsWithOffers]);
    }
}
