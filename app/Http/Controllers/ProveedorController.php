<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Proveedore;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function indexEditProveedor($id){
        $proveedor=Proveedore::findOrFail($id);
        return view('editProveedor',['proveedor'=>$proveedor]);
    }
    public function indexProveedor():View{
        $proveedores=Proveedore::all();
        return view('proveedor',['proveedores'=>$proveedores]);
    }
    public function crearProveedor(Request $request){
        $validateData=$request->validate([
            'nombre'=>'required|string|max:30',
            'direccion'=>'required|string|max:30',
            'email'=>'required|email',
            'telefono'=>'required|string|max:30',
            'descripcion'=> 'nullable|string'
        ]);
        Proveedore::create($validateData);
        return redirect()->route('proveedor');
    }
    public function setProveedor(Request $request,$id){
        $validateData=$request->validate([
            'nombre'=>'required|string|max:30',
            'direccion'=>'required|string|max:30',
            'email'=>'required|email',
            'telefono'=>'required|string|max:30',
            'descripcion'=> 'nullable|string'
        ]);
        $proveedor = Proveedore::findOrFail($id);
    
        $proveedor->update($validateData);

        return redirect()->route('proveedor');
    }
    public function deleteProveedor($id){
        Proveedore::destroy($id);
        return redirect()->route('proveedor');
    }
}
