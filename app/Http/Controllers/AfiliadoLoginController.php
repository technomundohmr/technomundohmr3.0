<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AfiliadoLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function login (){
        $afiliado = auth()->id();
        if($afiliado == ""){
            return view('main.loginAfiliado');
        }else{
            return redirect("afiliado/$afiliado");
        }
    }
    
    public function loginPost (Request $request){
        $datos=$request->only('correo','password');
        if(Auth::guard('afiliado')->attempt($datos)){
            $afiliado = auth()->id();
            return redirect("afiliado/$afiliado");
        }else{
            return back()->withErrors(['errores'=>'Datos incorrectos']);
        }
    }
}
