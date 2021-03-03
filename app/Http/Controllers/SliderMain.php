<?php

namespace App\Http\Controllers;

use App\rc;
use Illuminate\Http\Request;
use App\Slider;
use Illuminate\Support\Facades\Storage;
class SliderMain extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['imgs'] = Slider::all();
        return view('cms.main.sliderMain',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $datos['imgs'] = Slider::paginate(10);
        return view('cms.main.createSlider', $datos);
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
        Slider::insert($datos);
        return redirect('sliderMain/create');
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
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato = Slider::findOrFail($id);
        Storage::delete('public/'.$dato->img);
        Slider::destroy($id);
        return redirect('sliderMain/create');
    }
}
