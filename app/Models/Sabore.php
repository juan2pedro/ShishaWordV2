<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Sabore
 *
 * @property $id
 * @property $marca_id
 * @property $nombre
 * @property $detalles
 * @property $created_at
 * @property $updated_at
 *
 * @property Contiene[] $contienes
 * @property Empaquetado[] $empaquetados
 * @property Marca $marca
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sabore extends Model
{
    
    static $rules = [
		'marca_id' => 'required',
		'nombre' => 'required',
		'detalles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca_id','nombre','detalles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contienes()
    {
        return $this->hasMany('App\Models\Contiene', 'sabore_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empaquetados()
    {
        return $this->hasMany('App\Models\Empaquetado', 'sabore_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'marca_id');
    }
    

}
