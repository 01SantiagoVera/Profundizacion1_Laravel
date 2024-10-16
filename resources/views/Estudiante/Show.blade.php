@extends('layout.app')

@section('title', $estudiante->nombre)

@section('content')
    <div class="col py-3">
        <div class="container mt-5 bg-light p-4 rounded-3" style="max-width: 600px;">
            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h4 class="fw-bold text-center text-uppercase text-white p-2 mb-3">
                    {{$estudiante->nombre}} {{$estudiante->apellido}}
                </h4>
                <div class="row text-white">
                    <!-- Primera columna -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-card-text me-2"></i>
                        <b>ID:</b> {{$estudiante->id}}
                    </div>
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-telephone me-2"></i>
                        <b>Telefono:</b> {{$estudiante->telefono}}
                    </div>

                </div>
                <div class="info-item mb-3 text-white">
                    <i class="bi bi-columns-gap"></i>
                    <b>Habilidades:</b>
                    <span>{{$estudiante->habilidades}}</span>
                </div>
                <div class="info-item mb-3 text-white">
                    <i class="bi bi-envelope"></i>
                    <b>Email:</b>
                    <span>{{$estudiante->email}}</span>
                </div>
            </div>

            <div class="d-flex justify-content-start">
                <a href="{{ route('Estudiante.index') }}" class="btn btn-outline-secondary btn-lg shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>
        </div>
    </div>
@endsection
