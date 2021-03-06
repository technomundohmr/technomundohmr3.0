<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Servicio;
class IndexController extends Controller
{
    public function Index(){
        $datos['servicios'] = Servicio::all();
        return view('main.index', $datos);
    }
}
