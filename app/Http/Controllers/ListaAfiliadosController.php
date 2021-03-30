<?php

namespace App\Http\Controllers;

use App\afiliado;
use App\rc;
use Illuminate\Http\Request;

class ListaAfiliadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['afiliados'] = afiliado::orderByDesc('id')->paginate('20');
        return view('cms.main.listaAfiliados',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = request()->only('id');
        $datos['afiliados'] = afiliado::where('id','like',$id)->get();
        return view('cms.main.listaAfiliados',$datos);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        $datos=request()->except('_token', '_method', 'operacion');
        $operacion= request('operacion');
        $afiliado = afiliado::findOrFail($id);
        if($operacion == '-'){
            $saldo=$afiliado['ganancia']-request('valor');
            afiliado::where('id','=',$id)->update(['ganancia' => $saldo]);
            return redirect('listaAfiliados');
        }if($operacion == '+'){
            $saldo=$afiliado['ganancia']+request('valor');
            afiliado::where('id','=',$id)->update(['ganancia' => $saldo]);
            return redirect('listaAfiliados');
            
        }
        
        
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
}
