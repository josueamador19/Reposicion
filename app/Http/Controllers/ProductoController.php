<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        $productos= Producto::all();
        return view('productos', compact('productos'));
    }
    public function create(){
        return view('crearProducto');
    }
    public function guardar(Request $request){
        $productos= new Producto();

        $productos->descripcion=$request->descripcion;
         $productos->precio=$request->precio;
         $productos->stock=$request->stock;
       
        $productos->pagaIsv=$request->pagaIsv;
        $productos->save();
        return redirect()->route('producto.inicio');
    }
}
