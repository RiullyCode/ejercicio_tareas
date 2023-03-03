<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    public function listarTareas(){
        $tareas = Tarea::all();
            return view('tareas', ["misTareas" => $tareas]);
    }

    public function añadirTareas(Request $req){
        $tarea = new Tarea;
        $tarea->tarea = $req->input('tarea');
        $tarea->save();
    
        $tareas = Tarea::all();
        return view('tareas', ["misTareas" => $tareas]);
    }
    
    public function eliminarTarea($id) {
        $tarea = Tarea::findOrFail($id);
        $tarea->delete();
        
        return redirect()->route('listarTareas');
    }
    
}

