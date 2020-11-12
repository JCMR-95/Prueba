<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DatosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only('verCargo');
    }

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

    public function editar(Request $request, $id)
    {
        $datos = DB::table('tabla_prueba')->where('id', '=', $id)->get();
        return view('ActualizarDato',compact('datos'));
    
    }

    public function actualizar(Request $request)
    {
        $id = $request->id;
        $informe = $request->informe;
        $confirmacion = $request->confirmacion;
        $grado = $request->grado;

        dd($id);
        
        DB::table('tabla_prueba')->where('id', $id)->update(['informe' => $informe]);
        DB::table('tabla_prueba')->where('id', $id)->update(['confirmacion' => $confirmacion]);
        DB::table('tabla_prueba')->where('id', $id)->update(['grado' => $grado]);

        return back()->with('exito','Formulario Actualizado con Éxito');
    }

    public function eliminar($id)
    {
        DB::table('tabla_prueba')->where('id', '=', $id)->delete();
        return back()->with('exito','Formulario Eliminado con Éxito');
    
    }

}
