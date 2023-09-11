<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $table = 'rooms';
    protected $primaryKey = 'room_id'; 

    public function bookings() 
    {
        return $this->hasMany(Bookings::class, 'room_id', 'room_id');
    }

    public function images()
    {
        return $this->hasMany(RoomImages::class, 'room_id', 'room_id');
    }
}
