<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Producto
 *
 * @property $id
 * @property $imagen
 * @property $nombre
 * @property $descripcion
 * @property $id_marca
 * @property $id_categoria
 * @property $id_tipo_producto
 * @property $id_codigo
 * @property $precio
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @property Categoria $categoria
 * @property Codigo $codigo
 * @property Factura[] $facturas
 * @property Marca $marca
 * @property TipoProducto $tipoProducto
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Producto extends Model
{
    
    static $rules = [
		'imagen' => 'required',
		'nombre' => 'required',
		'descripcion' => 'required',
		'id_marca' => 'required',
		'id_categoria' => 'required',
		'id_tipo_producto' => 'required',
		'id_codigo' => 'required',
		'precio' => 'required',
		'stock' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['imagen','nombre','descripcion','id_marca','id_categoria','id_tipo_producto','id_codigo','precio','stock'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoria()
    {
        return $this->hasOne('App\Models\Categoria', 'id', 'id_categoria');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function codigo()
    {
        return $this->hasOne('App\Models\Codigo', 'id', 'id_codigo');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function facturas()
    {
        return $this->hasMany('App\Models\Factura', 'id_producto', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function marca()
    {
        return $this->hasOne('App\Models\Marca', 'id', 'id_marca');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoProducto()
    {
        return $this->hasOne('App\Models\TipoProducto', 'id', 'id_tipo_producto');
    }
}
