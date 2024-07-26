<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personas;
class PersonaController extends Controller
{
    public function listar(){
        $personas = Personas::all();
        return view('listado', compact('personas'));
    }
    public function alta(Request $request){

        $persona  = new Personas();
        $persona -> nombre = $request -> post("nombre");
        $persona -> apellido = $request -> post("apellido");
        $persona -> telefono = $request -> post("telefono");
        $persona->save();
    }
    public function baja($id){
        $persona = Personas::findOrFail($id);
        $persona->delete();
    }
    public function modificacion(Request $request, $id){
        $persona = Personas::findOrFail($id);
        $persona -> nombre = $request -> post("nombre");
        $persona -> apellido = $request -> post("apellido");
        $persona -> telefono = $request -> post("telefono");
        $persona->save();
    }
}
