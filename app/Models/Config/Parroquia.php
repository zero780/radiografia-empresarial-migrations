<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class Parroquia extends Model
{
    protected $table = 'config__parroquias';

    /**
     * Get the provincia record associated with the Parroquia.
     */
    public function provincia()
    {
        return $this->belongsTo(Provincia::class, 'id_provincia');
    }

    /**
     * Get the canton record associated with the Parroquia.
     */
    public function canton()
    {
        return $this->belongsTo(Canton::class, 'id_canton');
    }

    /**
     * Creación de lotes de una parroquia
     */
    public static function create_lotes($cod_canton, $codigo, $nombre, $is_rural)
    {
        try {
            $canton = Canton::where('codigo', $cod_canton)->firstOrFail();
            return Parroquia::create(['id_provincia' => $canton->id_provincia, 'id_canton' => $canton->id, 'nombre' => trim(mb_strtoupper($nombre, 'UTF-8')), 'cod_provincia' => $canton->cod_provincia, 'cod_canton' => $canton->codigo, 'codigo' => $codigo, 'is_rural' => $is_rural]);
        } catch (\Exception $exception)
        {

        } return null;
    }

    public static function getUbicacion($id)
    {
        try {
            $parroquia = Parroquia::findOrFail($id);
            return $parroquia->provincia->nombre.' / '.$parroquia->canton->nombre.' / '.$parroquia->nombre;
        } catch (\Exception $exception)
        {

        } return '';
    }

    public static function get_all()
    {
        return Parroquia::join('config__cantones', 'config__cantones.id', '=', 'config__parroquias.id_canton')
            ->join('config__provincias', 'config__provincias.id', '=', 'config__cantones.id_provincia')
            ->select('config__parroquias.id', 'config__provincias.nombre as provincia', 'config__cantones.nombre as canton', 'config__parroquias.nombre as parroquia', 'config__parroquias.codigo')
            ->get();
    }

    public function getFullName()
    {
        return Parroquia::getUbicacion($this->id);
    }
}
