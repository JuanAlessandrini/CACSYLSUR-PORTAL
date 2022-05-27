<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Empresa;
use App\Models\Archivo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class AlumnoController
 * @package App\Http\Controllers
 */
class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('permission:ver-alumno|crear-alumno|editar-alumno|borrar-alumno', ['only' => ['index']]);
        $this->middleware('permission:crear-alumno', ['only' => ['create', 'store']]);
        $this->middleware('permission:editar-alumno', ['only' => ['edit', 'update']]);
        $this->middleware('permission:borrar-alumno', ['only' => ['destroy']]);
    }
    public function index()
    {
        $user = Auth::user()->name;
        $id_empresa = DB::table('empresas')->select('id')->where('nombre_empresa', '=', $user)->first();

        if ($user !== 'superadmin') {
            $alumnos = Alumno::where('empresa_id', '=', $id_empresa->id)->paginate();
            $empresa = Empresa::pluck('nombre_empresa', 'id');
            return view('alumno.index', compact('alumnos', 'empresa', 'user'))
                ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
        } else {
            $alumnos = Alumno::paginate();
            $empresa = Empresa::pluck('nombre_empresa', 'id');
            return view('alumno.index', compact('alumnos', 'empresa'))
                ->with('i', (request()->input('page', 1) - 1) * $alumnos->perPage());
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumno = new Alumno();
        $empresa = Empresa::pluck('nombre_empresa', 'id');

        return view('alumno.create', compact('alumno', 'empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Alumno::$rules);
        $existe = Alumno::where('dni', '=', $request->input('dni'))->first();
        if ($existe === null) {
            $alumno = Alumno::create($request->all());

            return redirect()->route('alumnos.index')
                ->with('success', 'Alumno creado exitosamente.');
        } else {
            return redirect()->route('alumnos.create')
                ->with('error', 'El alumno no se pudo crear por que el dni ya esta registrado.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $alumno = Alumno::find($id);
        $archivo = DB::table('archivos')->where('alumno_id', '=', $id)->first();
        //dd($archivo);
        $path = storage_path("app/" . $archivo->certificado);
        return view('alumno.show', compact('alumno', 'path'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::find($id);
        $empresa = Empresa::pluck('nombre_empresa', 'id');

        return view('alumno.edit', compact('alumno', 'empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Alumno $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alumno $alumno)
    {
        request()->validate(Alumno::$rules);

        $alumno->update($request->all());

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $alumno = Alumno::find($id)->delete();

        return redirect()->route('alumnos.index')
            ->with('success', 'Alumno borrado correctamente');
    }
    public function contador()
    {
        $user = Auth::user()->name;
        $id_empresa = DB::table('empresas')->select('id')->where('nombre_empresa', '=', $user)->first();
        if ($user === 'superadmin' || $user === 'administrador') {
            $cant_usuarios = Alumno::count();
            return $cant_usuarios;
        } else {
            $cant_usuarios = DB::table('alumnos')->select('*')->where('empresa_id', '=', $id_empresa->id)->count();
            return $cant_usuarios;
        }
    }
}
