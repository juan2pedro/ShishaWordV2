<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materiale
 *
 * @property $id
 * @property $nombre
 * @property $color
 * @property $detalles
 * @property $created_at
 * @property $updated_at
 *
 * @property Disponible[] $disponibles
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materiale extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'color' => 'required',
		'detalles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','color','detalles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disponibles()
    {
        return $this->hasMany('App\Models\Disponible', 'materiale_id', 'id');
    }
    

}
