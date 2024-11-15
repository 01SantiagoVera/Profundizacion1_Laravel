<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Models\Empresa;
use App\Models\Estudiante;
use App\Models\TutorAcademico;
Use App\Models\TutorEmpresarial;

class DashboardController extends Controller
{

    public function index()
    {
        $totalEmpresas = Empresa::count();
        $totalEstudiantes = Estudiante::count();
        $tutoresAcademico = TutorAcademico::count();
        $tutoresEmpresariales = TutorEmpresarial::count();

        return view('Dashboard.dashboard', compact('totalEmpresas', 'totalEstudiantes', 'tutoresAcademico', 'tutoresEmpresariales'));
    }
}
