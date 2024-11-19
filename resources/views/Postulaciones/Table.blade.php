@extends('layout.app')

@if(session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
        {{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@section('title', 'Lista de Postulaciones')

@section('content')

    <div class="row mb-4">
        <div class="col-12 col-md-6">
            <h3 class="fw-bold text-uppercase mb-0" style="color: #393939;">Postulaciones</h3>
        </div>

    </div>

    <div class="table-responsive">
        <table class="table table-dark table-hover mb-0">
            <thead style="background-color: #393939;">
            <tr class="text-uppercase text-success">
                <th scope="col">Estudiante</th>
                <th scope="col">Oferta</th>
                <th scope="col">Fecha de Postulación</th>
                <th scope="col">Estado</th>
                <th scope="col">Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($postulaciones as $postulacion)
                <tr>
                    <td>{{ $postulacion->estudiante->nombre }} {{ $postulacion->estudiante->apellido }}</td>
                    <td>{{ $postulacion->oferta->titulo }}</td>
                    <td>{{ $postulacion->fecha_postulacion }}</td>
                    <td>{{ $postulacion->estado }}</td>

                    <td>

                        <form action="{{ route('Postulacion.destroy', $postulacion->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger" title="Borrar" onclick="return confirm('¿Estás seguro de que quieres borrar esta postulación?');">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
