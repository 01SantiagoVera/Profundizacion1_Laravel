@extends('layout.client')

@section('title', 'Detalle de la Oferta')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center">{{ $oferta->titulo }}</h3>

        <div class="row mt-4">
            <div class="col-md-8 offset-md-2">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Información de la Oferta</h5>
                        <p><strong>Empresa:</strong> {{ $oferta->empresa ? $oferta->empresa->nombre : 'Universidad de Santander (UDES)' }}</p>
                        <p><strong>Remuneración:</strong> ${{ number_format($oferta->remuneracion, 2) }}</p>
                        <p><strong>Fecha de Inicio:</strong> {{ \Carbon\Carbon::parse($oferta->fecha_inicio)->format('d-m-Y') }}</p>
                        <p><strong>Fecha de Fin:</strong> {{ \Carbon\Carbon::parse($oferta->fecha_fin)->format('d-m-Y') }}</p>
                        <p><strong>Duración:</strong> {{ $oferta->duracion }} días</p>
                        <p><strong>Habilidades Requeridas:</strong> {{ $oferta->habilidades }}</p>
                        <p><strong>Descripción:</strong> {{ $oferta->descripcion }}</p>
                        <p><strong>Requisitos:</strong> {{ $oferta->requisitos }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-4">
            <a href="{{ route('ofertas.empresa') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@endsection
