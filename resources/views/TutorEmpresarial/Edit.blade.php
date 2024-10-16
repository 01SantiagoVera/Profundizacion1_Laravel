
@extends('layout.app')

@section('title', 'Editor Tutor')
@section('content')
    <div class="col py-3">
        <div class="container mt-5 bg-light p-4 rounded-2">
            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h3 class="fw-bold text-center text-uppercase text-white p-2 mb-3">Editar Estudiante</h3>
                <form action="{{ route('TutorEmpresarial.update', $tutor->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="nombres" class="form-label text-white">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-building"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="nombres" name="nombres" value="{{ $tutor->nombres }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label text-white">Apellido</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-person-badge"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="apellidos" name="apellidos" value="{{ $tutor->apellidos }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="empresa" class="form-label text-white">Empresa</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi  bi-building"></i></span>
                            <select class="form-control bg-dark text-white border-light rounded" id="id_empresa" name="id_empresa" required>
                                <option value="" disabled>Seleccione la empresa</option>
                                @foreach($empresas as $empresa)
                                    <option value="{{ $empresa->id }}"
                                            @if($empresa->id == $tutor->id_empresa) selected @endif>
                                        {{ $empresa->nombre }}
                                    </option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="cargo" class="form-label text-white">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-columns-gap"></i></span>
                            <input class="form-control bg-dark text-white border-light rounded" id="cargo" name="cargo" value="{{ $tutor->cargo }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label text-white">Teléfono</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-telephone"></i></span>
                            <input type="tel" class="form-control bg-dark text-white border-light rounded" id="telefono" name="telefono" value="{{ $tutor->telefono }}" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control bg-dark text-white border-light rounded" id="email" name="email" value="{{ $tutor->email }}" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-outline-success btn-lg shadow-sm me-2" aria-label="Actualizar">
                            <i class="bi bi-arrow-up-square"></i> Actualizar
                        </button>
                        <a href="{{ route('TutorEmpresarial.index') }}" class="btn btn-outline-danger btn-lg shadow-sm">
                            <i class="bi bi-x-lg"></i> Cancelar
                        </a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
