<?php

namespace App\Http\Controllers;

use App\Correo;
use Illuminate\Http\Request;

class landingPagesController extends Controller
{
    public function servicioTecnico1 (){
        return view('landingPages/serviciotecnico1');
    }

    public function paginaWeb1 (){
        return view('landingPages/paginaWeb1');
    }

    public function Afiliados1 (){
        return view('landingPages/afiliados1');
    }

    public function cursoPos (){
        return view('landingPages/cursoPOS');
    }

    public function correoCursoPOS (Request $request){
        $datos=request()->except('_token','destino');
        Correo::insert($datos);
        return redirect("/descargar/cursoTechnoPos.rar");
    }
}
