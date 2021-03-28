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
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
            setcookie('IDCliente', $afiliado, time()+9999999999, '/');
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
    public function edit($id)
    {
        $afiliado = afiliado::findOrFail($id);
        return view('main.editAfiliado', compact('afiliado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datos=request()->except('_token', '_method');
        afiliado::where('id','=',$id)->update($datos);
        return redirect("afiliado/$id");
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
        setcookie('IDCliente', '', time()-1, '/');
        return redirect('/');
    }


}
