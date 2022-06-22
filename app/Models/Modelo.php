<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Modelo
 *
 * @property $id
 * @property $marca_id
 * @property $fecha
 * @property $nombre
 * @property $color
 * @property $detalles
 * @property $base
 * @property $imagenes
 * @property $precio
 * @property $created_at
 * @property $updated_at
 *
 * @property Disponible[] $disponibles
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Modelo extends Model
{
    
    static $rules = [
		'marca_id' => 'required',
		'fecha' => 'required',
		'nombre' => 'required',
		'color' => 'required',
		'detalles' => 'required',
		'base' => 'basic',
		'imagenes' => 'required',
		'precio' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca_id','fecha','nombre','color','detalles','base','imagenes','precio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function disponibles()
    {
        return $this->hasMany('App\Models\Disponible', 'modelo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    

}

