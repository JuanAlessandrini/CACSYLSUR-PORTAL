<?php

namespace App\Http\Controllers;

use App\Models\Inscripcione;
use App\Models\Alumno;
use App\Models\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Class InscripcioneController
 * @package App\Http\Controllers
 */
class InscripcioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscripciones = Inscripcione::paginate();
        // $alumno = Alumno::pluck('nombre', 'id');
        $alumno = DB::table('alumnos')
            ->select('nombre', 'apellido', 'id')
            ->get();
        $curso = Curso::pluck('nombre_grupo', 'id');
        return view('inscripcione.index', compact('inscripciones', 'alumno', 'curso'))
            ->with('i', (request()->input('page', 1) - 1) * $inscripciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inscripcione = new Inscripcione();
        $alumno = Alumno::select(DB::raw("CONCAT(nombre,' ', apellido) AS nombre"), "id")->pluck('nombre', 'id');
        $curso = Curso::pluck('nombre_grupo', 'id');
        return view('inscripcione.create', compact('inscripcione', 'alumno', 'curso'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Inscripcione::$rules);

        $inscripcione = Inscripcione::create($request->all());

        return redirect()->route('cursos.index')
            ->with('success', 'Inscripcion realizada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inscripcione = Inscripcione::find($id);

        return view('inscripcione.show', compact('inscripcione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inscripcione = Inscripcione::find($id);
        $alumno = Alumno::select(DB::raw("CONCAT(nombre,' ', apellido) AS nombre"), "id")->pluck('nombre', 'id');
        $curso = Curso::pluck('nombre_grupo', 'id');

        return view('inscripcione.edit', compact('inscripcione', 'alumno', 'curso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Inscripcione $inscripcione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inscripcione $inscripcione)
    {
        request()->validate(Inscripcione::$rules);

        $inscripcione->update($request->all());

        return redirect()->route('inscripciones.index')
            ->with('success', 'Inscripcion actualizada correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inscripcione = Inscripcione::find($id)->delete();

        return redirect()->route('cursos.index')
            ->with('success', 'Inscripcion borrada correctamente');
    }
}
