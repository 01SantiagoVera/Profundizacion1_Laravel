
@extends('layout.app')

@section('title', 'editor empresa')
@section('content')
<body>
    <div class="container mt-5 bg-light p-4">
        <div class="card p-4 shadow-sm mb-4">
            <h3 class="fw-bold text-center text-uppercase p-2 rounded mb-3">Editar Empresa</h3>
            <form action="{{ route('empresa.update', $empresa->id) }}"  method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') <!-- Método PUT para la actualización -->
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-building"></i></span>
                        <input type="text" class="form-control rounded-3 shadow-sm" id="nombre" name="nombre" value="{{ $empresa->nombre }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nit" class="form-label">NIT</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-file-earmark-text"></i></span>
                        <input type="text" class="form-control rounded-3 shadow-sm" id="nit" name="nit" value="{{ $empresa->nit }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" class="form-control rounded-3 shadow-sm" id="direccion" name="direccion" value="{{ $empresa->direccion }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                        <input type="tel" class="form-control rounded-3 shadow-sm" id="telefono" name="telefono" value="{{ $empresa->telefono }}" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="email" class="form-control rounded-3 shadow-sm" id="email" name="email" value="{{ $empresa->email }}" required>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary btn-lg rounded-pill" aria-label="Actualizar">Actualizar</button>

                    <a href="{{ route('empresa.index') }}" class="btn btn-secondary btn-lg rounded-pill" aria-label="Cancelar">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
</body>
@endsection
