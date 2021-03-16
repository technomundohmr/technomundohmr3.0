<?php

namespace App\Http\Controllers;

use App\afiliado;
use App\rc;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\TryCatch;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct()
    {
        $this->middleware('auth:afiliado',  ['index' , 'show']);
    }


    
     public function index()
    {
        $afiliado = auth()->id();
        return redirect("afiliado/$afiliado");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('main.createAfiliado');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            try{
                afiliado::insert($datos);
                return redirect('/');
            }catch(\Exception $exception){
                return back()->withErrors(['exception' => 'El usuario que estas tratando de crear ya existe']);
            }
            
        }else{
            return back()->withErrors([ 'password' => 'las contraseñas no concuerdan']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $afiliado = auth()->id();
        if($id == $afiliado){
            $afiliado = afiliado::findOrFail($id);
            return view ('main.afiliado' , compact('afiliado'));
        }else{
            return redirect("afiliado/$afiliado");
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit(rc $rc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rc $rc)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy(rc $rc)
    {
        //
    }

    public function logOut(){
        Auth::logout();
        return redirect('/');
    }


}
