<?php

namespace App\Models\Config;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    protected $table = 'config__provincias';

    /**
     * Get the comments for the blog post.
     */
    public function cantones()
    {
        return $this->hasMany(Canton::class, 'id_provincia');
    }
}
