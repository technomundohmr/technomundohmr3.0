<?php

namespace App\Http\Controllers;

use App\categorias_tiendas;
use App\rc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoriasTienda extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:loginCMS');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['categorias'] = categorias_tiendas::all();
        return view('cms.tienda.categorias', $datos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos=request()->except('_token');
        if ($request->hasFile('img')) {
            $datos['img']=$request->file('img')->store('uploads','public');
        }
        categorias_tiendas::insert($datos);
        return redirect('cms/tienda/categorias/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function show(rc $rc)
    {
        //
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
    public function destroy($id)
    {
        $dato = categorias_tiendas::findOrFail($id);
        Storage::delete('public/'.$dato->img);
        categorias_tiendas::destroy($id);
        return redirect('cms/tienda/categorias/create');
    }
}
