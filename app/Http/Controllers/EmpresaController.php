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
        return view('empresas.edit', compact('empresa'));
    }
    public function destroy($id) {
        $empresa = Empresa::findOrFail($id); // Busca la empresa
        $empresa->delete(); // Elimina la empresa
        return redirect()->route('empresa.index')->with('mensaje', 'Empresa eliminada'); // Redirige con un mensaje
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
        return view('empresas.show', compact('empresa'));
    }


}

