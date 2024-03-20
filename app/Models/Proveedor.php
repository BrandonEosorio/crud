<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Proveedor
 *
 * @property $id
 * @property $Nombre
 * @property $NombreEmpresa
 * @property $Nit
 * @property $Ciudad
 * @property $Telefono
 * @property $Email
 * @property $Producto
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Proveedor extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['Nombre', 'NombreEmpresa', 'Nit', 'Ciudad', 'Telefono', 'Email', 'Producto'];



}
