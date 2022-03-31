<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Certificacion;

class CertificacionController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-certificado|crear-certificado|editar-certificado|borrar-certificado', ['only' => ['index']]);
        $this->middleware('permission:editar-certificado', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-certificado', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $certificaciones = Certificacion::paginate(5);
        return view('certificaciones.index', compact('certificaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('certificaciones.crear');
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
            'nombre_curso' => 'required',
            'slug_curso' => 'required',
            'validez' => 'required',
        ]);
        Certificacion::create($request->all());
        return redirect()->route('certificaciones.index');
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
    public function edit($id)
    {
        $certificacion = Certificacion::find($id);
        return view('certificaciones.editar', compact('certificacion'));
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
            'nombre_curso' => 'required',
            'slug_curso' => 'required',
            'validez' => 'required',
        ]);
        $certificacion->update($request->all());
        return redirect()->route('certificaciones.index');
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
        return redirect()->route('certificaciones.index');
    }
}
