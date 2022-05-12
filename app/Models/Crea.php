<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Crea
 *
 * @property $id
 * @property $user_id
 * @property $mezcla_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Mezcla $mezcla
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Crea extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'mezcla_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id','mezcla_id'];


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
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
