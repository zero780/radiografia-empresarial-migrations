<?php

namespace App\Models\Core;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Vinculo extends Model
{
    use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'core__vinculos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'nombre',
        'descripcion',
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
        static::creating(function($vinculo) {
            $vinculo->slug = Str::slug($vinculo->nombre);
        });
    }
}
