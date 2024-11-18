@extends('layout.app')

@section('title', 'Editar Oferta de Práctica')

@section('content')
    <div class="card p-4 shadow-sm mb-4 bg-dark">
        <h3 class="fw-bold text-center text-uppercase text-white p-2 mb-3">Editar Oferta</h3>

        <form action="{{ route('Oferta.update', $oferta->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Título de la Oferta -->
            <div class="mb-3">
                <label for="titulo" class="form-label text-white">Título de la Oferta</label>
                <div class="input-group">
                    <span class="input-group-text bg-dark text-white"><i class="bi bi-bookmark"></i></span>
                    <input type="text" class="form-control bg-dark text-white border-light rounded @error('titulo') is-invalid @enderror"
                           id="titulo" name="titulo" value="{{ old('titulo', $oferta->titulo) }}"
                           placeholder="Ingresa el título de la oferta" required>
                    @error('titulo')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Descripción -->
            <div class="mb-3">
                <label for="descripcion" class="form-label text-white">Descripción</label>
                <textarea class="form-control bg-dark text-white border-light rounded @error('descripcion') is-invalid @enderror"
                          id="descripcion" name="descripcion"
                          placeholder="Describe la oferta de práctica" rows="3" required>{{ old('descripcion', $oferta->descripcion) }}</textarea>
                @error('descripcion')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Empresa -->
            <div class="mb-3">
                <label for="id_empresa" class="form-label text-white">Empresa</label>
                <div class="input-group">
                    <span class="input-group-text bg-dark text-white"><i class="bi bi-building"></i></span>
                    <select class="form-control bg-dark text-white border-light rounded @error('id_empresa') is-invalid @enderror"
                            id="id_empresa" name="id_empresa">
                        <option value="">Selecciona una empresa</option>
                        @foreach($empresas as $empresa)
                            <option value="{{ $empresa->id }}" {{ old('id_empresa', $oferta->id_empresa) == $empresa->id ? 'selected' : '' }}>
                                {{ $empresa->nombre }}
                            </option>
                        @endforeach
                    </select>
                    @error('id_empresa')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Requisitos -->
            <div class="mb-3">
                <label for="requisitos" class="form-label text-white">Requisitos</label>
                <textarea class="form-control bg-dark text-white border-light rounded @error('requisitos') is-invalid @enderror"
                          id="requisitos" name="requisitos"
                          placeholder="Especifica los requisitos de la oferta" rows="3">{{ old('requisitos', $oferta->requisitos) }}</textarea>
                @error('requisitos')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Remuneración -->
            <div class="mb-3">
                <label for="remuneracion" class="form-label text-white">Remuneración</label>
                <div class="input-group">
                    <span class="input-group-text bg-dark text-white"><i class="bi bi-currency-dollar"></i></span>
                    <input type="number" step="0.01"
                           class="form-control bg-dark text-white border-light rounded @error('remuneracion') is-invalid @enderror"
                           id="remuneracion" name="remuneracion"
                           value="{{ old('remuneracion', $oferta->remuneracion) }}"
                           placeholder="Cantidad en pesos">
                    @error('remuneracion')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <!-- Fechas -->
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="fecha_inicio" class="form-label text-white">Fecha de Inicio</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-calendar"></i></span>
                            <input type="date"
                                   class="form-control bg-dark text-white border-light rounded @error('fecha_inicio') is-invalid @enderror"
                                   id="fecha_inicio" name="fecha_inicio"
                                   value="{{ old('fecha_inicio', $oferta->fecha_inicio) }}"
                                   required onchange="calcularDuracion()">
                            @error('fecha_inicio')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="fecha_fin" class="form-label text-white">Fecha de Fin</label>
                        <div class="input-group">
                            <span class="input-group-text bg-dark text-white"><i class="bi bi-calendar"></i></span>
                            <input type="date"
                                   class="form-control bg-dark text-white border-light rounded @error('fecha_fin') is-invalid @enderror"
                                   id="fecha_fin" name="fecha_fin"
                                   value="{{ old('fecha_fin', $oferta->fecha_fin) }}"
                                   required onchange="calcularDuracion()">
                            @error('fecha_fin')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Duración (Calculada automáticamente) -->
            <div class="mb-3">
                <label for="duracion_display" class="form-label text-white">Duración</label>
                <div class="input-group">
                    <span class="input-group-text bg-dark text-white"><i class="bi bi-hourglass-split"></i></span>
                    <input type="text"
                           class="form-control bg-dark text-white border-light rounded"
                           id="duracion_display"
                           readonly value="{{ $oferta->duracion }} días">
                    <input type="hidden" id="duracion" name="duracion" value="{{ $oferta->duracion }}">
                </div>
            </div>

            <!-- Habilidades -->
            <div class="mb-3">
                <label for="habilidades" class="form-label text-white">Habilidades Requeridas</label>
                <textarea class="form-control bg-dark text-white border-light rounded @error('habilidades') is-invalid @enderror"
                          id="habilidades" name="habilidades"
                          placeholder="Especifica las habilidades requeridas" rows="2">{{ old('habilidades', $oferta->habilidades) }}</textarea>
                @error('habilidades')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Botones de Acción -->
            <div class="d-flex justify-content-start">
                <button type="submit" class="btn btn-outline-success btn-lg shadow-sm me-2">
                    <i class="bi bi-save"></i> Guardar Cambios
                </button>
                <a href="{{ route('Oferta.listarOfertas') }}" class="btn btn-outline-danger btn-lg shadow-sm">
                    <i class="bi bi-x-lg"></i> Cancelar
                </a>
            </div>
        </form>
    </div>

    <!-- Script para calcular la duración -->
    <script>
        function calcularDuracion() {
            const fechaInicio = new Date(document.getElementById('fecha_inicio').value);
            const fechaFin = new Date(document.getElementById('fecha_fin').value);

            if (fechaInicio && fechaFin && fechaFin >= fechaInicio) {
                const diferenciaMilisegundos = fechaFin - fechaInicio;
                const diasDuracion = Math.ceil(diferenciaMilisegundos / (1000 * 60 * 60 * 24));
                document.getElementById('duracion').value = diasDuracion;
                document.getElementById('duracion_display').value = diasDuracion + ' días';
            } else {
                document.getElementById('duracion').value = '';
                document.getElementById('duracion_display').value = '';
            }
        }
    </script>
@endsection
