<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiante = Estudiante::all();
        return view('Estudiante.Table', compact('estudiante'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Estudiante.Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'email' => 'required|email',
            'habilidades' => 'required|string|max:1000',
        ]);

        // Crear el nuevo estudiante
        $estudiante = Estudiante::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'habilidades' => $request->habilidades,
        ]);

        // Redirigir a la lista de estudiantes
        return redirect()->route('Estudiante.index')->with('mensaje', 'Estudiante creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('Estudiante.Show', compact('estudiante'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('Estudiante.Edit', compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);

        // Validación de los datos
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'email' => 'required|email',
            'habilidades' => 'required|string|max:1000',
        ]);

        // Actualizar los datos del estudiante
        $estudiante->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'habilidades' => $request->habilidades,
        ]);

        // Redirigir a la lista de estudiantes
        return redirect()->route('Estudiante.index')->with('mensaje', 'Estudiante actualizado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);

        // Eliminar el estudiante
        $estudiante->delete();

        // Redirigir a la lista de estudiantes
        return redirect()->route('Estudiante.index')->with('mensaje', 'Estudiante eliminado');
    }
}
