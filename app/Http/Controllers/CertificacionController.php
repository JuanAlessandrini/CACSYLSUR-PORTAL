<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificacion;

class CertificacionController extends Controller
{

    function __construct(){
         // $this ->middleware('permission:ver-certificacion |crear-certificacion|editar-rol|borrar-rol',['only'=>['index']]);
        // $this ->middleware('permission:crear-rol',['only'=>['create','store']]);
        // $this ->middleware('permission:editar-rol',['only'=>['edit','update']]);
        // $this ->middleware('permission:borrar-rol',['only'=>['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $certificacion =Certificacion::paginate(5);
        return view('certificacion.index',compact('certificacion'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificacion.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'curso' =>'required',
            'slug' => 'required',
            'validez' => 'required'
        ]);
        Certificacion::create($request -> all());
        return redirect()->route('certificacion.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificacion $certificacion)
    {
        return view('certificacion.editar',compact('certificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificacion $certificacion)
    {
        request()->validate([
            'curso' =>'required',
            'slug' => 'required',
            'validez' => 'required'
        ]);
        $certificacion->update($request->all());
        return redirect()->route('certificacion.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificacion $certificacion)
    {
    
        $certificacion->delete();
        return redirect()->route('certificacion.index');
    }
}
