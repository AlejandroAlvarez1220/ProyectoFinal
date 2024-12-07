<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function productoCategoria(){
        return $this->hasMany(Producto::class);
    }
    protected $fillable =['nombre','descripcion'];
}
