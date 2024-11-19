@extends('layout.client')

@section('title', 'Ofertas de Práctica')

@section('content')
    <div class="container mt-5">
        <div class="col-md-8 offset-md-2">
            <div class="card custom-card shadow-sm p-4">
                <h4 class="fw-bold text-center text-uppercase mb-4 custom-title">
                    {{ $oferta->titulo }}
                </h4>
                <div class="row gy-3">
                    <!-- Información de la Empresa -->
                    <div class="col-md-6">
                        <i class="bi bi-building me-2"></i>
                        <b>Empresa:</b> {{ $oferta->empresa->nombre ?? 'Sin empresa asignada' }}
                    </div>

                    <!-- Remuneración -->
                    <div class="col-md-6">
                        <i class="bi bi-currency-dollar me-2"></i>
                        <b>Remuneración:</b> ${{ number_format($oferta->remuneracion, 2) }}
                    </div>

                    <!-- Fechas de la Oferta -->
                    <div class="col-md-6">
                        <i class="bi bi-calendar me-2"></i>
                        <b>Fecha de Inicio:</b> {{ \Carbon\Carbon::parse($oferta->fecha_inicio)->format('d-m-Y') }}
                    </div>
                    <div class="col-md-6">
                        <i class="bi bi-calendar me-2"></i>
                        <b>Fecha de Fin:</b> {{ \Carbon\Carbon::parse($oferta->fecha_fin)->format('d-m-Y') }}
                    </div>

                    <!-- Duración de la Oferta -->
                    <div class="col-md-6">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <b>Duración:</b> {{ $oferta->duracion }} días
                    </div>

                    <!-- Habilidades Requeridas -->
                    <div class="col-md-6">
                        <i class="bi bi-tools me-2"></i>
                        <b>Habilidades:</b> {{ $oferta->habilidades }}
                    </div>
                </div>

                <!-- Descripción y Requisitos -->
                <div class="mt-4">
                    <i class="bi bi-info-circle me-2"></i>
                    <b>Descripción:</b>
                    <p>{{ $oferta->descripcion }}</p>
                </div>
                <div>
                    <i class="bi bi-list-task me-2"></i>
                    <b>Requisitos:</b>
                    <p>{{ $oferta->requisitos }}</p>
                </div>

                <!-- Botón de Regreso y Formulario de Postulación -->
                <div class="d-flex justify-content-center mt-4">
                    <a href="{{ route('estudiante.ofertas') }}" class="btn custom-btn btn-lg shadow-sm px-4 me-3">
                        <i class="bi bi-arrow-left-circle"></i> Volver
                    </a>

                    <!-- Formulario de Postulación -->
                    <form action="{{ route('user.postulaciones.postularse', $oferta->id) }}" method="POST" class="w-100">
                        @csrf
                        <div class="mb-3">
                            <label for="id_estudiante" class="form-label">
                                <i class="bi bi-person"></i> Ingresa tu ID de Estudiante
                            </label>
                            <input type="number" name="id_estudiante" id="id_estudiante" class="form-control"
                                   placeholder="ID de Estudiante" required>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-primary btn-lg shadow-sm px-4">
                                <i class="bi bi-arrow-bar-up"></i> Postularme
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
