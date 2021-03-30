<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingPagesController extends Controller
{
    public function servicioTecnico1 (){
        return view('landingPages/serviciotecnico1');
    }
    public function paginaWeb1 (){
        return view('landingPages/paginaWeb1');
    }
}
