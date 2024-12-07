<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function proveedor(){
        return $this->belongsTo(Proveedore::class, 'id_proveedor');
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class, 'id_categoria');
    }
    protected $fillable=['nombre','descripcion','id_categoria','id_proveedor'];
}
