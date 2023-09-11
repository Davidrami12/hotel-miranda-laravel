<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rooms extends Model
{
    use HasFactory;

    protected $table = 'rooms';  // El nombre de la tabla. Si sigue las convenciones de Laravel, esto es opcional.
    protected $primaryKey = 'room_id';  // Definir la clave primaria si no es 'id'.

    // Relación con la tabla rooms_images
    public function images()
    {
        return $this->hasMany(RoomImages::class, 'room_id', 'room_id');
    }
}
