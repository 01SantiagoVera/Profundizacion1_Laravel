@extends('layout.app')

@section('title', 'Nuevo Tutor Empresarial')

@section('content')

            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h3 class="fw-bold text-center text-uppercase text-white p-2 mb-3">Registrar Nuevo Tutor Empresarial</h3>
                <form action="{{ route('TutorEmpresarial.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombres" class="form-label text-white">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="nombres" name="nombres" placeholder="Ingresa el nombre" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="apellidos" class="form-label text-white">Apellido</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-person-badge"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="apellidos" name="apellidos" placeholder="Ingresa el apellido" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="id_empresa" class="form-label text-white">Empresa</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-building"></i></span>
                            <select class="form-control bg-dark text-white border-light rounded" id="id_empresa" name="id_empresa" required>
                                <option value="" disabled selected>Seleccione la empresa</option>
                                @foreach($empresas as $empresa)
                                    <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="cargo" class="form-label text-white">Cargo</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-briefcase"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="cargo" name="cargo" placeholder="Ingrese el cargo" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label text-white">Teléfono</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-telephone"></i></span>
                            <input type="tel" class="form-control bg-dark text-white border-light rounded" id="telefono" name="telefono" placeholder="Ingresa el teléfono" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">Email</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-envelope"></i></span>
                            <input type="email" class="form-control bg-dark text-white border-light rounded" id="email" name="email" placeholder="Ingresa el email" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-outline-success btn-lg shadow-sm me-2">
                            <i class="bi bi-save"></i> Guardar
                        </button>
                        <a href="{{ route('TutorEmpresarial.index') }}" class="btn btn-outline-danger btn-lg shadow-sm">
                            <i class="bi bi-x-lg"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>

@endsection
