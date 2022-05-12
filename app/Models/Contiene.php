<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contiene
 *
 * @property $id
 * @property $mezcla_id
 * @property $sabore_id
 * @property $porcentaje
 * @property $created_at
 * @property $updated_at
 *
 * @property Mezcla $mezcla
 * @property Sabore $sabore
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contiene extends Model
{
    
    static $rules = [
		'mezcla_id' => 'required',
		'sabore_id' => 'required',
		'porcentaje' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['mezcla_id','sabore_id','porcentaje'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function mezcla()
    {
        return $this->hasOne('App\Models\Mezcla', 'id', 'mezcla_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sabore()
    {
        return $this->hasOne('App\Models\Sabore', 'id', 'sabore_id');
    }
    

}
