<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedore extends Model
{
    public function productoProveedor(){
        return $this->hasMany(Producto::class);
    }
    protected $fillable=['nombre','direccion','email','telefono','descripcion'];
}
