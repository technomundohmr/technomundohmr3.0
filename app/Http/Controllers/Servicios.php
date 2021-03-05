<?php

namespace App\Http\Controllers;

use App\rc;
use Illuminate\Http\Request;
use App\Servicio;
use Illuminate\Support\Facades\Storage;
class Servicios extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['servicios'] = Servicio::all();
        return view('cms.main.servicios',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['servicios'] = Servicio::all();
        return view('cms.main.createServicios', $datos);
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
        Servicio::insert($datos);
        return redirect('servicios/create');
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
        $servicio = Servicio::findOrFail($id);
        return view('cms.main.editServicios', compact('servicio'));
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
        $servicio = Servicio::findOrFail($id);
        if ($request->hasFile('img')) {
            $datos['img']=$request->file('img')->store('uploads','public');
            Storage::delete('public/'.$servicio->img);
        }    
        Servicio::where('id','=',$id)->update($datos);
        return redirect('servicios/create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rc  $rc
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Servicio::findOrFail($id);
        Storage::delete('public/'.$dato->img);
        Servicio::destroy($id);
        return redirect('servicios/create');
    }
}
