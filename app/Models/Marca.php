<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Marca
 *
 * @property $id
 * @property $marca
 * @property $fecha
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Marca extends Model
{
    
    static $rules = [
		'marca' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['marca','fecha'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_marca', 'id');
    }
    

}
