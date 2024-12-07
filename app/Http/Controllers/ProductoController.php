<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Proveedore;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function indexEditProducto($id){
        $producto=Producto::findOrFail($id);
        $categoria=Categoria::findOrFail($id);
        return view('editProducto',['producto'=>$producto]);
    }
    public function indexProducto():View{
        $productos = Producto::with('categoria', 'proveedor')->get();
        $categorias = Categoria::all();
        $proveedores = Proveedore::all();
        return view('producto', compact('categorias', 'proveedores', 'productos'));
    }
    public function crearProducto(Request $request){
        $validateData=$request->validate([
            'nombre'=>'required|string|max:30',
            'descripcion'=> 'nullable|string',
            'id_categoria'=>'required|integer|exists:categorias,id',
            'id_proveedor'=>'required|integer|exists:proveedores,id'
        ]);
        Producto::create($validateData);
        return redirect()->route('producto');
    }
    public function setProducto(Request $request,$id){
        $validateData=$request->validate([
            'nombre'=>'required|string|max:30',
            'descripcion'=> 'nullable|string',
            'id_categoria'=>'required|integer|exists:categorias,id',
            'id_proveedor'=>'required|integer|exists:proveedores,id'
        ]);
        $producto = Producto::findOrFail($id);
    
        $producto->update($validateData);

        return redirect()->route('producto');
    }
    public function deleteProducto($id){
        Producto::destroy($id);
        return redirect()->route('producto');
    }
}
