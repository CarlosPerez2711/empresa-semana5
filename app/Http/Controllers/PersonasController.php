<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        // Obtener las personas con paginación
        $personas = Persona::simplepaginate(3); // Cambia el número 10 por la cantidad de registros por página que desees

        // Retornar la vista con los datos de personas
        return view('personas.index', compact('personas'));
    }
}
