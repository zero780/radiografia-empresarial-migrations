<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Organizacion extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'core__organizaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_tipo_identificacion',
        'slug',
        'identificacion',
        'nombre',
        'created_by',
        'updated_by',
        'deleted_by'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();
        /**
         * Register a creating model event with the dispatcher.
         *
         * @param  \Closure|string  $callback
         * @return void
         */
        static::creating(function($organizacion) {
            $organizacion->slug = substr(Str::slug($organizacion->nombre), 0, 49);
            $organizacion->nombre = mb_strtoupper($organizacion->nombre, 'UTF-8');
        });
    }
}
