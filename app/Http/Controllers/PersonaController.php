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
}
