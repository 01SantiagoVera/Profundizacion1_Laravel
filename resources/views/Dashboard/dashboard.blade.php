@extends('layout.app')

@section('title', 'Dashboard')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <!-- Primera tarjeta: Empresas -->
            <div class="col-md-6 mb-4 ">
                <div class="card shadow-sm bg-dark">
                    <div class="card-body text-center text-white">
                        <i class="bi bi-building" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Empresas Registradas</h5>
                        <p class="card-text">Total de empresas: <strong>{{ $totalEmpresas }}</strong></p>
                    </div>
                </div>
            </div>

            <!-- Segunda tarjeta: Estudiantes -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm bg-dark">
                    <div class="card-body text-center text-white">
                        <i class="bi bi-person" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Estudiantes Registrados</h5>
                        <p class="card-text">Total de estudiantes: <strong>{{ $totalEstudiantes }}</strong></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Tercera tarjeta: Tutores -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm bg-dark">
                    <div class="card-body text-center text-white">
                        <i class="bi bi-mortarboard" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Tutores Asignados</h5>
                        <p class="card-text">Tutores institucionales: <strong>{{ $tutoresAcademico }}</strong><br>
                            Tutores empresariales: <strong>{{ $tutoresEmpresariales }}</strong>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cuarta tarjeta: Ofertas activas -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm bg-dark">
                    <div class="card-body text-center text-white">
                        <i class="bi bi-graph-up-arrow" style="font-size: 2rem;"></i>
                        <h5 class="card-title mt-3">Ofertas de Práctica Activas</h5>
                        <p class="card-text">Total de ofertas activas: <strong>{{ $tutoresEmpresariales }}</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
