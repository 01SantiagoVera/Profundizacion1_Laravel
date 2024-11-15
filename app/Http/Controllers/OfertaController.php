<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class OfertaController extends BaseController
{
    public function index()
    {
        $ofertas = Oferta::with('empresa')->get();
        return view('oferta.table', compact('ofertas'));
    }

    public function create()
    {    // Obtener todas las empresas disponibles
        $empresas = \App\Models\Empresa::all();

        return view('oferta.Create', compact('empresas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_empresa' => 'nullable|exists:empresa,id',
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'requisitos' => 'nullable|string',
            'duracion' => 'nullable|numeric|min:1',
            'remuneracion' => 'nullable|numeric',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'habilidades' => 'nullable|string',
        ]);

        Oferta::create([
            'id_Empresa' => $request->id_empresa ?? null,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'requisitos' => $request->requisitos,
            'duracion' => $request->duracion,
            'remuneracion' => $request->remuneracion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'habilidades' => $request->habilidades,
        ]);

        return redirect()->route('Oferta.index')->with('success', 'Oferta creada exitosamente');
    }

    public function update(Request $request, $id)
    {
        $oferta = Oferta::findOrFail($id);

        $request->validate([
            'id_empresa' => 'nullable|exists:empresa,id',  // Cambiado de empresas a empresa
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'requisitos' => 'nullable|string',
            'duracion' => 'required|integer|min:1',
            'remuneracion' => 'nullable|numeric',
            'fecha_inicio' => 'required|date',
            'fecha_fin' => 'required|date|after_or_equal:fecha_inicio',
            'habilidades' => 'nullable|string',
        ]);

        $oferta->update([
            'id_Empresa' => $request->id_empresa ?? null,
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'requisitos' => $request->requisitos,
            'duracion' => $request->duracion,
            'remuneracion' => $request->remuneracion,
            'fecha_inicio' => $request->fecha_inicio,
            'fecha_fin' => $request->fecha_fin,
            'habilidades' => $request->habilidades,
        ]);

        return redirect()->route('Oferta.index')->with('success', 'Oferta actualizada con éxito');
    }

    public function show($id)
    {
        $oferta = Oferta::with('empresa')->findOrFail($id);
        return view('oferta.show', compact('oferta'));
    }

    public function edit($id)
    {
        $oferta = Oferta::findOrFail($id);
        $empresas = Empresa::all();
        return view('Oferta.edit', compact('oferta', 'empresas'));
    }


    public function destroy($id)
    {
        $oferta = Oferta::findOrFail($id);
        $oferta->delete();

        return redirect()->route('Oferta.index')->with('success', 'Oferta eliminada con éxito');
    }
}
