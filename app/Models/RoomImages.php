<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomImages extends Model
{
    use HasFactory;

    protected $table = 'rooms_images';
    protected $primaryKey = 'id'; // Asumiendo que tu tabla tiene una columna 'id' como clave primaria.

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id', 'room_id');
    }
}
