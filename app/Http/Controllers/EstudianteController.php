<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{

    public function index()
    {
        $estudiante = Estudiante::all();
        return view('Estudiante.Table', compact('estudiante'));
    }


    public function create()
    {
        return view('Estudiante.Create');
    }


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


        return redirect()->route('Estudiante.index')->with('mensaje', 'Estudiante creado con éxito');
    }


    public function show(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('Estudiante.Show', compact('estudiante'));
    }


    public function edit(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);
        return view('Estudiante.Edit', compact('estudiante'));
    }


    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::findOrFail($id);


        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'required|numeric',
            'email' => 'required|email',
            'habilidades' => 'required|string|max:1000',
        ]);

        // Actualizar los datos del estudiante como requeridos
        $estudiante->update([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'habilidades' => $request->habilidades,
        ]);


        return redirect()->route('Estudiante.index')->with('mensaje', 'Estudiante actualizado');
    }


    public function destroy(string $id)
    {
        $estudiante = Estudiante::findOrFail($id);


        $estudiante->delete();


        return redirect()->route('Estudiante.index')->with('mensaje', 'Estudiante eliminado');
    }
}
