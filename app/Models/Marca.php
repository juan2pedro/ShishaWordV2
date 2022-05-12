<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $nombre
 * @property $pais
 * @property $contacto
 * @property $sitioWeb
 * @property $created_at
 * @property $updated_at
 *
 * @property Modelo[] $modelos
 * @property Sabore[] $sabores
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'pais' => 'required',
		'contacto' => 'required',
		'sitioWeb' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','pais','contacto','sitioWeb'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelos()
    {
        return $this->hasMany('App\Models\Modelo', 'marca_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sabores()
    {
        return $this->hasMany('App\Models\Sabore', 'marca_id', 'id');
    }
    

}
