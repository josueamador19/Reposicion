<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    public function index(){
        $proveedores= Proveedores::all();
        return view('proveedores', compact('proveedores'));
    }
    public function create(){
        return view('crearProveedor');
    }

    public function guardar(Request $request){
        $proveedor= new Proveedores();

        $proveedor->nombre=$request->nombre;
        $proveedor->telefono=$request->telefono;
        $proveedor->correo=$request->correo;
        $proveedor->save();
        return redirect()->route('proveedor.inicio');
    }
}
