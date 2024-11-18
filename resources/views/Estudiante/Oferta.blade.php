@extends('layout.client')

@section('title', 'Ofertas de Práctica')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4">Ofertas de Práctica Disponibles</h1>
        <div class="row">
            @foreach ($ofertas as $oferta)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $oferta->titulo }}</h5>
                            <p class="card-text">
                                {{ \Illuminate\Support\Str::limit($oferta->descripcion, 100) }}
                            </p>
                            <ul class="list-unstyled">
                                <li><strong>Duración:</strong> {{ $oferta->duracion }} meses</li>
                                <li><strong>Remuneración:</strong> ${{ number_format($oferta->remuneracion, 0) }}</li>
                                <li><strong>Empresa:</strong> {{ $oferta->empresa->nombre ?? 'Sin asignar' }}</li>
                            </ul>
                            <a href="{{ route('estudiante.ofertas.show', $oferta->id) }}"
                               class="btn btn-primary">Ver más</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

