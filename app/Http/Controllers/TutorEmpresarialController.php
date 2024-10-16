<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TutorEmpresarial;

class TutorEmpresarialController extends Controller
{
    public function index()
    {

        $tutores = TutorEmpresarial::with('empresa')->get();
        return view('TutorEmpresarial.Table', compact('tutores'));
    }


    public function create()
    {    // Obtener todas las empresas disponibles
        $empresas = \App\Models\Empresa::all();

        return view('TutorEmpresarial.Create', compact('empresas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_empresa' => 'required|exists:empresa,id',  // Validar que id_empresa exista en la tabla empresas
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
        ]);

        // Crear un nuevo tutor empresarial
        TutorEmpresarial::create([
            'id_empresa' => $request->id_empresa,
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('TutorEmpresarial.index')->with('mensaje', 'Tutor Empresarial creado con éxito');
    }


    public function show($id)
    {
        $tutor = TutorEmpresarial::with('empresa')->findOrFail($id);
        return view('TutorEmpresarial.Show', compact('tutor'));
    }

    public function edit($id)
    {
        $tutor = TutorEmpresarial::findOrFail($id);
        $empresas = \App\Models\Empresa::all();
        return view('TutorEmpresarial.Edit', compact('tutor', 'empresas'));
    }

    public function update(Request $request, $id)
    {
        $tutor = TutorEmpresarial::findOrFail($id);

        $request->validate([
            'id_empresa' => 'required|exists:empresa,id',
            'nombres' => 'required|string|max:255',
            'apellidos' => 'required|string|max:255',
            'cargo' => 'required|string|max:255',
            'email' => 'required|email',
            'telefono' => 'required|numeric',
        ]);

        $tutor->update([
            'nombres' => $request->nombres,
            'apellidos' => $request->apellidos,
            'cargo' => $request->cargo,
            'email' => $request->email,
            'telefono' => $request->telefono,
        ]);

        return redirect()->route('TutorEmpresarial.index')->with('mensaje', 'Tutor Empresarial actualizado');
    }

    public function destroy($id)
    {
        $tutor = TutorEmpresarial::findOrFail($id);
        $tutor->delete();
        return redirect()->route('TutorEmpresarial.index')->with('mensaje', 'Tutor Empresarial eliminado');
    }
}
