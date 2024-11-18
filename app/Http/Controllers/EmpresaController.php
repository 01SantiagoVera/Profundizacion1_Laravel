<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Empresa;
class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('Empresas.Table', compact('empresas'));
    }

    public function create()
    {
        return view('Empresas.Create');
    }

    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('Empresas.edit', compact('empresa'));
    }
    public function destroy($id) {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete(); // Elimina la empresa
        return redirect()->route('Empresa.index')->with('mensaje', 'Empresa eliminada');
    }


    public function store(Request $request){
        Empresa::create($request->all());
        return redirect('empresa')->with('mensaje', 'Empresa guardada');
    }


    public function update(Request $request, $id){
        $empresa = Empresa::findOrFail($id);
        $empresa->update($request->all());
        return redirect('empresa')->with('mensaje', 'Empresa actualizada');
    }

    public function show($id){
        $empresa = Empresa::findOrFail($id);
        return view('Empresas.show', compact('empresa'));
    }


}

