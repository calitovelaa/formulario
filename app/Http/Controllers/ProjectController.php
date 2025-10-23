<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opinion;

class ProjectController extends Controller
{
    public function guardarInformacion(Request $request){
        $datos = $request->input();
        
        $opinion = new Opinion();
        $opinion->nombre = $datos['nombre'];
        $opinion->email = $datos['email'];
        $opinion->opinion = $datos['opinion'];
        $opinion->save();

        return redirect('/formulario');
        ;
    }
}
