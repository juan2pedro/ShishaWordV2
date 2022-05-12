<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Disponible
 *
 * @property $id
 * @property $materiale_id
 * @property $modelo_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Materiale $materiale
 * @property Modelo $modelo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Disponible extends Model
{
    
    static $rules = [
		'materiale_id' => 'required',
		'modelo_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materiale_id','modelo_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materiale()
    {
        return $this->hasOne('App\Models\Materiale', 'id', 'materiale_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function modelo()
    {
        return $this->hasOne('App\Models\Modelo', 'id', 'modelo_id');
    }
    

}
