@extends('layout.client')

@section('title', 'Ofertas de Práctica')

@section('content')
    <div class="container mt-5">
        <h3 class="text-center">Ofertas de Prácticas</h3>
        <div class="row mt-4">
            <div class="col-12">
                <!-- Botón alineado a la derecha -->
                <div class="d-flex justify-content-end mb-3">
                    <a href="{{ route('Estudiante.create') }}" class="btn btn-outline-primary btn-lg shadow-sm">
                        <i class="bi bi-plus-lg"></i> Nueva oferta
                    </a>
                </div>
            </div>
            <!-- Ofertas -->
            @foreach ($ofertas as $oferta)
                <div class="col-md-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $oferta->titulo }}</h5>
                            <p><strong>Empresa:</strong> {{ $oferta->empresa ? $oferta->empresa->nombre : 'Universidad de Santander (UDES)' }}</p>
                            <p><strong>Remuneración:</strong> ${{ number_format($oferta->remuneracion, 2) }}</p>
                            <a href="{{ route('empresas.ofertas.show', $oferta->id) }}" class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
