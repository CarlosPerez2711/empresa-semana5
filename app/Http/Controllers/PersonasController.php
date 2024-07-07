<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonasController extends Controller
{
    public function index()
    {
        $personas = Persona::simplepaginate(3); 

        return view('personas.index', compact('personas'));
    }
}
