@extends('layout.app')

@if(session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
        {{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@section('title', 'Lista de Estudiantes')

@section('content')
    <div class="col py-3">
        <div class="container mt-5">
            <div class="row mb-4">
                <div class="col-12 col-md-6">
                    <h3 class="fw-bold text-uppercase mb-0" style="color: #393939;">Estudiantes</h3>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-start mt-3 mt-md-0">
                    <a href="{{ route('Estudiante.create') }}" class="btn btn-outline-primary btn-lg shadow-sm">
                        <i class="bi bi-plus-lg"></i> Nuevo Estudiante
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-hover mb-0">
                    <thead style="background-color: #393939;">
                    <tr class="text-uppercase text-success">
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Habilidades</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tutores as $tutorAcademico)
                        <tr>
                            <td>{{ $estudiante->nombre }}</td>
                            <td>{{ $estudiante->apellido }}</td>
                            <td>{{ $estudiante->telefono }}</td>
                            <td>{{ $estudiante->email }}</td>
                            <td>{{ $estudiante->habilidades }}</td>
                            <td>
                                <a href="{{ route('Estudiante.edit', $estudiante->id) }}" class="btn btn-sm btn-outline-success" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('Estudiante.show', $estudiante->id) }}" class="btn btn-sm btn-outline-primary" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="{{ route('Estudiante.destroy', $estudiante->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Borrar" onclick="return confirm('¿Estás seguro de que quieres borrar esta empresa?');">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
