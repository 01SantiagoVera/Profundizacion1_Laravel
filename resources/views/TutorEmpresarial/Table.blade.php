@extends('layout.app')

@if(session('mensaje'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="alert">
        {{ session('mensaje') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@section('title', 'Lista de Tutores Empresariales')

@section('content')

            <div class="row mb-4">
                <div class="col-12 col-md-6">
                    <h3 class="fw-bold text-uppercase mb-0" style="color: #393939;">Tutores Empreariales</h3>
                </div>
                <div class="col-12 col-md-6 d-flex justify-content-md-end justify-content-start mt-3 mt-md-0">
                    <a href="{{ route('TutorEmpresarial.create') }}" class="btn btn-outline-primary btn-lg shadow-sm">
                        <i class="bi bi-plus-lg"></i> Nuevo Tutor
                    </a>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-dark table-hover mb-0">
                    <thead style="background-color: #393939;">
                    <tr class="text-uppercase text-success">
                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Cargo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Email</th>
                        <th scope="col">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tutores as $tutorEmpresarial)
                        <tr>
                            <td>{{ $tutorEmpresarial->nombres }}</td>
                            <td>{{ $tutorEmpresarial->apellidos }}</td>
                            <td>{{ $tutorEmpresarial->empresa->nombre }}</td>
                            <td>{{ $tutorEmpresarial->cargo }}</td>
                            <td>{{ $tutorEmpresarial->telefono }}</td>
                            <td>{{ $tutorEmpresarial->email }}</td>

                            <td>
                                <a href="{{ route('TutorEmpresarial.edit', $tutorEmpresarial->id) }}" class="btn btn-sm btn-outline-success" title="Editar">
                                    <i class="bi bi-pencil"></i>
                                </a>
                                <a href="{{ route('TutorEmpresarial.show', $tutorEmpresarial->id) }}" class="btn btn-sm btn-outline-primary" title="Ver">
                                    <i class="bi bi-eye"></i>
                                </a>
                                <form action="{{ route('TutorEmpresarial.destroy', $tutorEmpresarial->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger" title="Borrar" onclick="return confirm('¿Estás seguro de que quieres borrar este Tutor?');">
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
