<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use App\Models\Tarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class TareaController
 * @package App\Http\Controllers
 */
class TareaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tareas = Tarea::paginate();

        return view('tarea.index', compact('tareas'))
            ->with('i', (request()->input('page', 1) - 1) * $tareas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tarea = new Tarea();
        $grados = Grado::pluck('nombre', 'id');

        return view('tarea.create', compact('tarea','grados'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Tarea::$rules);

        $imagenes = $request->file('archivo')->store('public/documentos');
        $url = Storage::url($imagenes);
        
        Tarea::create([
            'id'=> $request->id,
            'nombre'=> $request->nombre,
            'fechalimite'=> $request->fechalimite,
            'descripcion'=> $request->descripcion,
            'archivo'=> $url,
            'grado_id'=> $request->grado_id,


        ]);

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tarea = Tarea::find($id);
        $grados = Grado::pluck('nombre', 'id');

        return view('tarea.show', compact('tarea','grados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tarea = Tarea::find($id);
        $grados = Grado::pluck('nombre', 'id');

        return view('tarea.edit', compact('tarea','grados'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Tarea $tarea
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarea $tarea)
    {
        request()->validate(Tarea::$rules);

        $tarea->update($request->all());

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tarea = Tarea::find($id)->delete();

        return redirect()->route('tareas.index')
            ->with('success', 'Tarea deleted successfully');
    }
    public function download( $archivo )
    {

        $tarea = Tarea::where('archivo', $archivo)->firstOrFail();

        $pathToFile = storage_path("public/documentos/". $tarea->archivo);
        return response()->download($pathToFile);

    }
}
