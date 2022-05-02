<?php

namespace App\Http\Controllers;

use App\Models\Certificacion;
use Illuminate\Http\Request;

/**
 * Class CertificacionController
 * @package App\Http\Controllers
 */
class CertificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $certificaciones = Certificacion::paginate();

        return view('certificacion.index', compact('certificaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $certificaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $certificacion = new Certificacion();
        return view('certificacion.create', compact('certificacion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Certificacion::$rules);

        $certificacion = Certificacion::create($request->all());

        return redirect()->route('certificaciones.index')
            ->with('success', 'Curso creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $certificacion = Certificacion::find($id);

        return view('certificacion.show', compact('certificacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $certificacion = Certificacion::find($id);

        return view('certificacion.edit', compact('certificacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Certificacion $certificacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificacion $certificacion)
    {
        request()->validate(Certificacion::$rules);

        $certificacion->update($request->all());

        return redirect()->route('certificaciones.index')
            ->with('success', 'Curso modificado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $certificacion = Certificacion::find($id)->delete();

        return redirect()->route('certificaciones.index')
            ->with('success', 'Curso borrado');
    }
}
