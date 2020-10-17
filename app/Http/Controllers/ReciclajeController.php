<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PuntoReciclaje;
use App\Recolectores;
use App\DetalleRecolecto;

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
    
    public function crearRecolectorVista(Request $request)
    {
        return view('crear_recolectores');
    }

    public function crearRecolector(Request $request)
    {
        $dias = "";
        $recolector = new Recolectores();
        
        $recolector->nombre = $request->nombre;
        if ($request->lunes == "on") {
            $dias .= "lunes,";   
        }
        if ($request->martes == "on") {
            $dias .= "martes,";   
        }
        if ($request->miercoles == "on") {
            $dias .= "miercoles,";   
        }
        if ($request->jueves == "on") {
            $dias .= "jueves,";   
        }
        if ($request->viernes == "on") {
            $dias .= "viernes,";   
        }
        if ($request->sabado == "on") {
            $dias .= "sabado,";   
        }
        if ($request->domingo == "on") {
            $dias .= "domingo,";   
        }

        $recolector->dias_recoleccion = $dias;
        $recolector->save();
        return back()->withInput();
    }

    public function listarRecolectorVista(Request $request)
    {
        $recolectores = Recolectores::all();
        return view('enlistado_recolectores')->with("recolector",$recolectores);
    }

    public function editarRecolectorVista(Request $request,$id)
    {
        if ($id) {
            $recolector= Recolectores::where("id",$id)->first();
            $puntos = PuntoReciclaje::all();
            return view('edicion_recolectores')->with('recolectores',$recolector)->with('puntos',$puntos);
        }
    }

    public function editarRecolector(Request $request)
    {
        $dias = "";
        $recolector= Recolectores::where("id",$request->id)->first();
        $recolector->nombre = $request->nombre;

        if ($request->lunes == "on") {
            $dias .= "lunes,";   
        }
        if ($request->martes == "on") {
            $dias .= "martes,";   
        }
        if ($request->miercoles == "on") {
            $dias .= "miercoles,";   
        }
        if ($request->jueves == "on") {
            $dias .= "jueves,";   
        }
        if ($request->viernes == "on") {
            $dias .= "viernes,";   
        }
        if ($request->sabado == "on") {
            $dias .= "sabado,";   
        }
        if ($request->domingo == "on") {
            $dias .= "domingo,";   
        }
        $recolector->dias_recoleccion = $dias;

        $recolector->save();
        return redirect()->route('lista_recolector_vista');
    }
    
    public function creaRelacion(Request $request)
    {
        if($request->punto_reciclaje !== null){
            $relacion = new DetalleRecolecto();
            $relacion->id_punto_reciclaje = $request->punto_reciclaje;
            $relacion->id_recolectores = $request->id;
            $relacion->save();
            return redirect()->route('lista_recolector_vista');
        }else{
            return back()->withInput();
        }
    }

    public function listaRelaciones(Request $request)
    {
        $relacion = DetalleRecolecto::with(['recolector','punto'])->get();
        
        return view('lista_relaciones')->with('relacion',$relacion);
    }

    public function eliminaPunto(Request $request,$id)
    {
        $recolector= PuntoReciclaje::where("id",$id)->first();
        $d_r = DetalleRecolecto::where("id_punto_reciclaje",$id)->get();
        $recolector->delete();
        foreach ($d_r as $item) {
            $item->delete();
        }
        return redirect()->route('lista_punto_vista');
    }

    public function eliminaRecolector(Request $request,$id)
    {
        $recolector= Recolectores::where("id",$id)->first();
        $d_r = DetalleRecolecto::where("id_recolectores",$id)->get();
        $recolector->delete();
        foreach ($d_r as $item) {
            $item->delete();
        }
        return redirect()->route('lista_recolector_vista');
    }
}
