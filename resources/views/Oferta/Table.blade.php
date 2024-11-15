@extends('layout.app')

@if(session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
        {{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@section('title', 'Lista de Ofertas')

@section('content')
    <div class="row mb-4">
        <div class="col-12 col-md-6">
            <h3 class="fw-bold text-uppercase mb-0" style="color: #393939;">Ofertas</h3>
        </div>
        <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-start mt-3 mt-md-0">
            <a href="{{ route('Oferta.create') }}" class="btn btn-outline-primary btn-lg shadow-sm">
                <i class="bi bi-plus-lg"></i> Nueva Oferta
            </a>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-dark table-hover mb-0">
            <thead style="background-color: #393939;">
            <tr class="text-uppercase text-success">
                <th scope="col">Título</th>
                <th scope="col">Empresa</th>
                <th scope="col">Fecha Inicio</th>
                <th scope="col">Fecha de Fin</th>
                <th scope="col">Duración</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ofertas as $oferta)
                <tr>
                    <td>{{ $oferta->titulo }}</td>
                    <td>{{ $oferta->empresa->nombre ?? 'UDES' }}</td>
                    <td>{{ \Carbon\Carbon::parse($oferta->fecha_inicio)->format('Y-m-d') }}</td>
                    <td>{{ \Carbon\Carbon::parse($oferta->fecha_fin)->format('Y-m-d') }}</td>
                    <td>{{ $oferta->duracion }} días</td>
                    <td>
                        <a href="{{ route('Oferta.edit', $oferta->id) }}" class="btn btn-sm btn-outline-success" title="Editar">
                            <i class="bi bi-pencil"></i>
                        </a>
                        <a href="{{ route('Oferta.show', $oferta->id) }}" class="btn btn-sm btn-outline-primary" title="Ver">
                            <i class="bi bi-eye"></i>
                        </a>
                        <form action="{{ route('Oferta.destroy', $oferta->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Borrar"
                                    onclick="return confirm('¿Estás seguro de que quieres borrar esta oferta?');">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <script>
        // Auto-cerrar la alerta después de 5 segundos
        document.addEventListener('DOMContentLoaded', function() {
            let alert = document.getElementById('alert');
            if(alert) {
                setTimeout(function() {
                    alert.remove();
                }, 5000);
            }
        });
    </script>
@endsection
