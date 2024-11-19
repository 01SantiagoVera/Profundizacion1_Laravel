<?php

namespace App\Http\Controllers;

use App\Models\Postulacion;
use App\Models\Oferta;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class PostulacionController extends Controller
{
    // Funciones para el administrador
    public function index()
    {
        $postulaciones = Postulacion::with(['estudiante', 'oferta'])->get();
        return view('Postulaciones.Table', compact('postulaciones'));
    }

    public function create(Request $request)
    {
        $vista = $request->get('vista');
        $ofertas = Oferta::all();
        $estudiantes = Estudiante::all();
        return view($vista, compact('ofertas', 'estudiantes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_estudiante' => 'required|exists:estudiantes,id',
            'id_oferta' => 'required|exists:ofertas,id',
            'estado' => 'required|string|max:50',
        ]);

        Postulacion::create($request->all());
        return redirect()->route('admin.postulaciones.index')->with('success', 'Postulación creada exitosamente.');
    }

    public function edit(Request $request, $id)
    {
        $vista = $request->get('vista');
        $postulacion = Postulacion::findOrFail($id);
        $ofertas = Oferta::all();
        $estudiantes = Estudiante::all();
        return view($vista, compact('postulacion', 'ofertas', 'estudiantes'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_estudiante' => 'required|exists:estudiantes,id',
            'id_oferta' => 'required|exists:ofertas,id',
            'estado' => 'required|string|max:50',
        ]);

        $postulacion = Postulacion::findOrFail($id);
        $postulacion->update($request->all());

        return redirect()->route('admin.postulaciones.index')->with('success', 'Postulación actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $postulacion = Postulacion::findOrFail($id);
        $postulacion->delete();
        return redirect()->route('admin.postulaciones.index')->with('success', 'Postulación eliminada exitosamente.');
    }

    // Funciones para el estudiante
    public function postularse(Request $request, $id_oferta)
    {
        $request->validate([
            'id_estudiante' => 'required|exists:estudiante,id',
        ]);


        Postulacion::create([
            'id_estudiante' => $request->id_estudiante,
            'id_oferta' => $id_oferta,
            'estado' => 'Pendiente',
            'fecha_postulacion' => now(),
        ]);

        return redirect()->route('estudiante.ofertas')->with('success', 'Te has postulado exitosamente.');
    }





    // Funciones para la empresa
    public function verPostulados(Request $request, $id_oferta)
    {
        $vista = $request->get('vista');
        $postulaciones = Postulacion::with('estudiante')
            ->where('id_oferta', $id_oferta)
            ->get();

        return view($vista, compact('postulaciones'));
    }
}
