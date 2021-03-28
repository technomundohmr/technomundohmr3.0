<?php

namespace App\Http\Controllers;

use App\afiliado;
use Illuminate\Http\Request;

class registroAfiliadoController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function registro(){
        return view('main.createAfiliado');
    }

    public function store(Request $request)
    {
        $this->validate(request(),[
            'correo' => 'email|required|string',
            'nombre' => 'required',
            'telefono' => 'required',
            'direccion' => 'required',
            'metodoReembolso' => 'required',
            'cuentaReembolso' => 'required',
            'documento' => 'required',
            'NoDocumento' => 'required',
            'password' => 'required',
            'password2' => 'required',
        ]);
        $datos=request()->except('_token');
        if($datos['password'] == $datos['password2']){
            $datos=request()->except('_token', 'password2');
            $datos['password']=bcrypt($datos['password']);
            $datos['ganancia']=0;
            try{
                afiliado::insert($datos);
                return redirect('/felicidades');
            }catch(\Exception $exception){
                return back()->withErrors(['exception' => 'El usuario que estas tratando de crear ya existe']);
            }
            
        }else{
            return back()->withErrors([ 'password' => 'las contraseñas no concuerdan']);
        }
    }
}
