<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Formato
 *
 * @property $id
 * @property $nombre
 * @property $detalles
 * @property $created_at
 * @property $updated_at
 *
 * @property Empaquetado[] $empaquetados
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Formato extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'detalles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','detalles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function empaquetados()
    {
        return $this->hasMany('App\Models\Empaquetado', 'formato_id', 'id');
    }
    

}
