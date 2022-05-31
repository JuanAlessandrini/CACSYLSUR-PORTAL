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

    function __construct()
    {
        $this->middleware('permission:ver-curso|crear-curso|editar-curso|borrar-curso', ['only' => ['index']]);
        $this->middleware('permission:crear-curso', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-curso', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-curso', ['only' => ['destroy']]);
    }
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

        // $certificacion = Certificacion::create($request->all());
        $certificacion = new Certificacion();
        $certificacion->nombre_curso = $request->input('nombre_curso');
        $certificacion->slug_curso = null;
        $certificacion->validez = $request->input('validez');

        $certificacion->save();

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
        //request()->validate(Certificacion::$rules);

        //$certificacion->update($request->all());
        // $certificacion->nombre_curso = $request->input('nombre_curso');
        // $certificacion->slug_curso = null;
        // $certificacion->validez = $request->input('validez');
        //$certificacion->update($request->all());
        dd($request->all(), $certificacion);

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
    public function contador()
    {
        $cant_usuarios = Certificacion::count();
        return $cant_usuarios;
    }
}
