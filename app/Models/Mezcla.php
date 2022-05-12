<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Mezcla
 *
 * @property $id
 * @property $detalles
 * @property $created_at
 * @property $updated_at
 *
 * @property Contiene[] $contienes
 * @property Crea[] $creas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Mezcla extends Model
{
    
    static $rules = [
		'detalles' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['detalles'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contienes()
    {
        return $this->hasMany('App\Models\Contiene', 'mezcla_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function creas()
    {
        return $this->hasMany('App\Models\Crea', 'mezcla_id', 'id');
    }
    

}
