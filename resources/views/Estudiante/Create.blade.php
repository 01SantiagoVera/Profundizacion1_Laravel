@extends('layout.app')

@section('title', 'Nuevo Estudiante')

@section('content')
    <div class="col py-3">

        <div class="container mt-5 bg-light p-4 rounded-3">
            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h3 class="fw-bold text-center text-uppercase text-white p-2 mb-3">Registrar Nuevo Estudiante</h3>
                <form action="{{ route('Estudiante.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nombre" class="form-label text-white">Nombre</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-person"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="nombre" name="nombre" placeholder="Ingresa el nombre" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label text-white">Apellido</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-person-badge"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="apellido" name="apellido" placeholder="Ingresa el apellido" required>
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
                    <div class="mb-3">
                        <label for="habilidades" class="form-label text-white">Habilidades</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-columns-gap"></i></span>
                            <input type="text" class="form-control bg-dark text-white border-light rounded" id="habilidades" name="habilidades" placeholder="Ingrese sus habilidades" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-start">
                        <button type="submit" class="btn btn-outline-success btn-lg shadow-sm me-2">
                            <i class="bi bi-save"></i> Guardar
                        </button>
                        <a href="{{ route('Estudiante.index') }}" class="btn btn-outline-danger btn-lg shadow-sm">
                            <i class="bi bi-x-lg"></i> Cancelar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
