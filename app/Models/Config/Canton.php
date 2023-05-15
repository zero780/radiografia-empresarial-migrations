<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    protected $table = 'config__cantones';

    /**
     * Get the provincia record associated with the canton.
     */
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }

    /**
     * Get the parroquia records associated with the canton.
     */
    public function parroquias()
    {
        return $this->hasMany(Parroquia::class, 'id_canton');
    }

    public static function getCiudad($provincia_nombre, $ciudad_nombre)
    {
        return Canton::join('config__provincias', 'config__provincias.id', '=', 'config__cantones.id_provincia')
            ->where('config__provincias.nombre', $provincia_nombre)
            ->where('config__cantones.nombre', $ciudad_nombre)
            ->select('config__cantones.*')
            ->first();
    }
}
