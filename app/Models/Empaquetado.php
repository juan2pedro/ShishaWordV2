<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Empaquetado
 *
 * @property $id
 * @property $formato_id
 * @property $sabore_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Formato $formato
 * @property Sabore $sabore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Empaquetado extends Model
{
    
    static $rules = [
		'formato_id' => 'required',
		'sabore_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['formato_id','sabore_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function formato()
    {
        return $this->hasOne('App\Models\Formato', 'id', 'formato_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sabore()
    {
        return $this->hasOne('App\Models\Sabore', 'id', 'sabore_id');
    }
    

}
