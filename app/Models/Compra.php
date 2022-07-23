<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Compra
 *
 * @property $id
 * @property $id_users
 * @property $total
 * @property $telefono
 * @property $direccion
 * @property $fecha_compra
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Compra extends Model
{
    
    static $rules = [
		'id_users' => 'required',
		'total' => 'required',
		'telefono' => 'required',
		'direccion' => 'required',
		'fecha_compra' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_users','total','telefono','direccion','fecha_compra'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_users');
    }
    

}
