<?php

namespace App\Http\Controllers;

use App\categorias_tiendas;
use App\producto;
use App\rc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Productos extends Controller
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
        $datos['productos'] = producto::all();
        $categorias['categorias'] = categorias_tiendas::all();
        return view('cms.tienda.productos', $datos, $categorias);
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
        if ($request->hasFile('imgMain')) {
            $datos['imgMain']=$request->file('imgMain')->store('uploads','public');
        }
        if ($request->hasFile('img0')) {
            $datos['img0']=$request->file('img0')->store('uploads','public');
        }
        if ($request->hasFile('img1')) {
            $datos['img1']=$request->file('img1')->store('uploads','public');
        }
        if ($request->hasFile('img2')) {
            $datos['img2']=$request->file('img2')->store('uploads','public');
        }
        if ($request->hasFile('img3')) {
            $datos['img3']=$request->file('img3')->store('uploads','public');
        }
        producto::insert($datos);
        return redirect('cms/tienda/productos/create');
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
    public function edit($id)
    {
        $producto = producto::findOrFail($id);
        $categorias['categorias'] = categorias_tiendas::all();
        return view('cms.tienda.editarProducto', compact('producto'), $categorias);
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
        $producto = producto::findOrFail($id);
        if ($request->hasFile('imgMain')) {
            $datos['imgMain']=$request->file('imgMain')->store('uploads','public');
            Storage::delete('public/'.$producto->imgMain);
        }    
        if ($request->hasFile('img0')) {
            $datos['img0']=$request->file('img0')->store('uploads','public');
            Storage::delete('public/'.$producto->img0);
        }    
        if ($request->hasFile('img1')) {
            $datos['img1']=$request->file('img1')->store('uploads','public');
            Storage::delete('public/'.$producto->img1);
        }    
        if ($request->hasFile('img2')) {
            $datos['img2']=$request->file('img2')->store('uploads','public');
            Storage::delete('public/'.$producto->img2);
        }    
        if ($request->hasFile('img3')) {
            $datos['img3']=$request->file('img3')->store('uploads','public');
            Storage::delete('public/'.$producto->img3);
        }    
        producto::where('id','=',$id)->update($datos);
        return redirect('cms/tienda/productos/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = producto::findOrFail($id);
        Storage::delete('public/'.$dato->img);
        producto::destroy($id);
        return redirect('cms/tienda/productos/create');
    }
}
