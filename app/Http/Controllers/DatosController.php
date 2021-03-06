<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatosController extends Controller
{

    public function verCargo(Request $request)
    {
        $cargo = $request->cargo;
        
        if($cargo == 'Administrador'){
            return view('Administrador');
        }else{
            return view('Usuario');
        }

    }

    public function enviarDatos(Request $request)
    {
        $informe = $request->informe;
        $confirmacion = $request->confirmacion;
        $grado = $request->grado;

        DB::table('tabla_prueba')->insert([
            'informe' => $informe,
            'confirmacion' => $confirmacion,
            'grado' => $grado
        ]);

        return back()->with('exito','Formulario Registrado con Éxito');
    
    }

    public function mostrarDatos(Request $request)
    {
        $datos = DB::table('tabla_prueba')->get();

        return view('Listado',compact('datos', 'request'));
    
    }


    public function eliminar($id)
    {
        DB::table('tabla_prueba')->where('id', '=', $id)->delete();
        return back()->with('exito','Formulario Eliminado con Éxito');
    
    }

}
