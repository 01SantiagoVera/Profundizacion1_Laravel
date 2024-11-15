@extends('Layout.app')

@section('title', $empresa->nombre)

@section('content')
    <div class="col py-3">
        <div class="container mt-5 bg-light p-4 rounded-3" style="max-width: 600px;">
            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h4 class="fw-bold text-center text-uppercase text-white p-2 mb-3">{{$empresa->nombre}}</h4>

                <div class="row text-white">
                    <!-- Primera columna -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-card-text me-2"></i>
                        <b>ID:</b> {{$empresa->id}}
                    </div>

                    <div class="col-md-6 mb-3">
                        <i class="bi bi-credit-card me-2"></i>
                        <b>NIT:</b> {{$empresa->nit}}
                    </div>

                    <!-- Segunda columna -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-geo-alt me-2"></i>
                        <b>Dirección:</b> {{$empresa->direccion}}
                    </div>


                    <div class="col-md-6 mb-3">
                        <i class="bi bi-telephone me-2"></i>
                        <b>Teléfono:</b> {{$empresa->telefono}}
                    </div>
                </div>
                <div class="info-item mb-3 text-white">
                    <i class="bi bi-envelope me-2"></i>
                    <b>Email:</b> {{$empresa->email}}
                </div>
            </div>

            <div class="d-flex justify-content-start">
                <a href="{{ route('empresa.index') }}" class="btn btn-outline-secondary btn-lg shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>
        </div>
    </div>
@endsection
