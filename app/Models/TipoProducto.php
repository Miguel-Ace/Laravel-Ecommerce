<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoProducto
 *
 * @property $id
 * @property $tipo_producto
 * @property $created_at
 * @property $updated_at
 *
 * @property Producto[] $productos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoProducto extends Model
{
    
    static $rules = [
		'tipo_producto' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tipo_producto'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productos()
    {
        return $this->hasMany('App\Models\Producto', 'id_tipo_producto', 'id');
    }
    

}
