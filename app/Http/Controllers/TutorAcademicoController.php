<?php

namespace App\Http\Controllers;

use App\Models\TutorAcademico;
use Illuminate\Http\Request;

class TutorAcademicoController extends Controller
{

    public function index()
    {
        $tutores = TutorAcademico::all();
        return view('TutorAcademico.Table', compact('tutores'));
    }

    public function create()
    {
        return view('TutorAcademico.Create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'programa' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
        ]);

        // Crear el nuevo tutor académico
        TutorAcademico::create([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'programa' => $request->programa,
            'email' => $request->email,
            'telefono' => $request->telefono,
        ]);


        return redirect()->route('TutorAcademico.index')->with('mensaje', 'Tutor Académico creado con éxito');
    }


    public function show(string $id)
    {
        $tutor = TutorAcademico::findOrFail($id);

        return view('TutorAcademico.Show', compact('tutor'));
    }

    public function edit(string $id)
    {
        $tutor = TutorAcademico::findOrFail($id);

        return view('TutorAcademico.Edit', compact('tutor'));
    }

    public function update(Request $request, string $id)
    {

        $tutor = TutorAcademico::findOrFail($id);


        $request->validate([
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'programa' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
        ]);

        // Actualizar los datos del tutor académico
        $tutor->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'programa' => $request->programa,
            'email' => $request->email,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('TutorAcademico.index')->with('mensaje', 'Tutor Académico actualizado');
    }


    public function destroy(string $id)
    {
        $tutor = TutorAcademico::findOrFail($id);
        $tutor->delete();
        return redirect()->route('TutorAcademico.index')->with('mensaje', 'Tutor Académico eliminado');
    }
}
