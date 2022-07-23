<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Codigo
 *
 * @property $id
 * @property $codigo
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Codigo extends Model
{
    
    static $rules = [
		'codigo' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_codigo', 'id');
    }
    

}
