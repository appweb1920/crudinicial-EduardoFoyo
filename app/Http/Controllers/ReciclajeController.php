<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PuntoReciclaje;

class ReciclajeController extends Controller
{
    public function crearPuntoVista(Request $request)
    {
        return view('crear_punto_reciclaje');
    }

    public function crearPunto(Request $request)
    {
        $punto = new PuntoReciclaje();
        $punto->tipo = $request->tipo;
        $punto->direccion = $request->direccion;
        $punto->hora_apertura = $request->apertura;
        $punto->hora_cierre = $request->cierre;
        $punto->save();
        return back()->withInput();
    }

    public function listarPuntoVista(Request $request)
    {
        $puntos = PuntoReciclaje::all();
        return view('enlistado_punto_reciclaje')->with("puntos",$puntos);
    }

    public function editarPuntoVista(Request $request,$id)
    {
        if ($id) {
            $punto= PuntoReciclaje::where("id",$id)->first();
            return view('edicion_punto_reciclaje')->with('punto',$punto);
        }
    }

    public function editarPunto(Request $request)
    {
        $punto= PuntoReciclaje::where("id",$request->id)->first();
        $punto->tipo = $request->tipo;
        $punto->direccion = $request->direccion;
        $punto->hora_apertura = $request->apertura;
        $punto->hora_cierre = $request->cierre;
        $punto->save();
        return redirect()->route('lista_punto_vista');
    }

}
