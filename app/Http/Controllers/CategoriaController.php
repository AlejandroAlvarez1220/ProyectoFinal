<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function indexEditCategoria($id){
        $categoria=Categoria::findOrFail($id);
        return view('editCategoria',['categoria'=>$categoria]);
    }
    public function indexCategoria():View{
        $categorias=Categoria::all();
        return view('categoria',['categorias'=>$categorias]);
    }
    public function crearCategoria(Request $request){
        $validateData=$request->validate([
            'nombre'=>'required|string|max:30',
            'descripcion'=> 'nullable|string'
        ]);
        Categoria::create($validateData);
        return redirect()->route('categoria');
    }
    public function setCategoria(Request $request,$id){
        $validateData=$request->validate([
            'nombre'=>'required|string|max:30',
            'descripcion'=> 'nullable|string'
        ]);
        $producto = Categoria::findOrFail($id);
    
        $producto->update($validateData);

        return redirect()->route('categoria');
    }
    public function deleteCategoria($id){
        Categoria::destroy($id);
        return redirect()->route('categoria');
    }
}
