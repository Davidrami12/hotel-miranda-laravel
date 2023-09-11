<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Booking;

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

        $roomsWithBookings = Rooms::whereHas('bookings', function ($query) use ($arrival, $departure) {
            $query->where(function ($query) use ($arrival, $departure) {
                $query->whereBetween('checkin', [$arrival, $departure])
                    ->orWhereBetween('checkout', [$arrival, $departure])
                    ->orWhere(function ($query) use ($arrival, $departure) {
                        $query->where('checkin', '<=', $arrival)
                                ->where('checkout', '>=', $arrival);
                    })
                    ->orWhere(function ($query) use ($arrival, $departure) {
                        $query->where('checkin', '<=', $departure)
                                ->where('checkout', '>=', $departure);
                    });
            });
        })->count();

        $allRooms = Rooms::count();

        $availabilityMessage = ($roomsWithBookings < $allRooms) ? "Rooms available for the selected dates!" : "Sorry, there are no rooms available.";

        return view('index', ['availabilityMessage' => $availabilityMessage]);
    }
}

