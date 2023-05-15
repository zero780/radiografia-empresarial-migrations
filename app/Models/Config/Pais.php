<?php


namespace App\Models\Config;


use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'config__paises';

    /**
     * Get the comments for the blog post.
     */
    public function provincias()
    {
        return $this->hasMany(Provincia::class, 'id_pais');
    }
}
