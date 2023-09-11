<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $availabilityMessage = "";
        return view('index', ['availabilityMessage' => $availabilityMessage]);
    }

    public function availabilityCheck(Request $request)
    {
        $availabilityMessage = "";

        $arrival = $request->input('arrival');
        $departure = $request->input('departure');

        $roomIDs = DB::select("SELECT room_id FROM rooms");

        $allAvailable = true;

        // Check availability for each room
        foreach ($roomIDs as $room) {
            $roomId = $room->room_id;
            $result = DB::select("SELECT * FROM bookings
                                  WHERE room_id = :roomId AND
                                    ((checkin BETWEEN :arrival AND :departure) OR
                                    (checkout BETWEEN :arrival AND :departure) OR
                                    (:arrival BETWEEN checkin AND checkout) OR
                                    (:departure BETWEEN checkin AND checkout))", 
                                    ['roomId' => $roomId, 'arrival' => $arrival, 'departure' => $departure]);

            if (count($result) > 0) {
                $allAvailable = false;
                break;
            }
        }

        $availabilityMessage = $allAvailable ? "All rooms are available for the selected dates!" : "Sorry, there are no rooms available.";

        return view('index', ['availabilityMessage' => $availabilityMessage]);
    }
}

