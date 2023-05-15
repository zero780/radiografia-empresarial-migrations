<?php


namespace App\Models\Config;


use Illuminate\Database\Eloquent\Model;

class Continente extends Model
{
    protected $table = 'config__continentes';

    /**
     * Get the comments for the blog post.
     */
    public function paises()
    {
        return $this->hasMany(Pais::class, 'id_continente');
    }
}
