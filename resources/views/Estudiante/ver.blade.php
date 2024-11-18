@extends('layout.client')

@section('title', 'Ofertas de Práctica')

@section('content')
    <div class="col py-3">
        <div class="container mt-5 bg-light p-4 rounded-3" style="max-width: 700px;">
            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h4 class="fw-bold text-center text-uppercase text-white p-2 mb-3">
                    {{ $oferta->titulo }}
                </h4>

                <div class="row text-white">
                    <!-- Información de la Empresa -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-building me-2"></i>
                        <b>Empresa:</b> {{ $oferta->empresa->nombre ?? 'Sin empresa asignada' }}
                    </div>

                    <!-- Remuneración -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-currency-dollar me-2"></i>
                        <b>Remuneración:</b> ${{ number_format($oferta->remuneracion, 2) }}
                    </div>

                    <!-- Fechas de la Oferta -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-calendar me-2"></i>
                        <b>Fecha de Inicio:</b> {{ \Carbon\Carbon::parse($oferta->fecha_inicio)->format('d-m-Y') }}
                    </div>
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-calendar me-2"></i>
                        <b>Fecha de Fin:</b> {{ \Carbon\Carbon::parse($oferta->fecha_fin)->format('d-m-Y') }}
                    </div>

                    <!-- Duración de la Oferta -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-hourglass-split me-2"></i>
                        <b>Duración:</b> {{ $oferta->duracion }} días
                    </div>

                    <!-- Habilidades Requeridas -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-tools me-2"></i>
                        <b>Habilidades:</b> {{ $oferta->habilidades }}
                    </div>
                </div>

                <!-- Descripción y Requisitos -->
                <div class="mb-3 text-white">
                    <i class="bi bi-info-circle me-2"></i>
                    <b>Descripción:</b>
                    <p>{{ $oferta->descripcion }}</p>
                </div>
                <div class="mb-3 text-white">
                    <i class="bi bi-list-task me-2"></i>
                    <b>Requisitos:</b>
                    <p>{{ $oferta->requisitos }}</p>
                </div>
            </div>

            <!-- Botón de Regreso -->
            <div class="d-flex justify-content-start">
                <a href="" class="btn btn-outline-secondary btn-lg shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>
        </div>
    </div>
@endsection


