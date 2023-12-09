<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function index(){
        $empleados= Empleado::all();
        return view('empleados', compact('empleados'));
    }
    public function create(){
        return view('crearEmpleado');
    }
    public function guardar(Request $request){
        $empleados= new Empleado();

        $empleados->nombre=$request->nombre;
        $empleados->apellido=$request->apellido;
        $empleados->salario=$request->salario;
     
        $empleados->save();
        return redirect()->route('empleado.inicio');
    }

}
