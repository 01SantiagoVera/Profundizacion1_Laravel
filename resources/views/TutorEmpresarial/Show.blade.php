@extends('layout.app')

@section('title', $tutor->nombres)

@section('content')
    <div class="col py-3">
        <div class="container mt-5 bg-light p-4 rounded-3" style="max-width: 600px;">
            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h4 class="fw-bold text-center text-uppercase text-white p-2 mb-3">
                    {{$tutor->nombres}} {{$tutor->apellidos}}
                </h4>

                <div class="row text-white">
                    <!-- Primera columna -->


                    <div class="col-md-6 mb-3">
                        <i class="bi bi-telephone me-2"></i>
                        <b>Teléfono:</b> {{$tutor->telefono}}
                    </div>


                    <div class="col-md-6 mb-3">
                        <i class="bi bi-building me-2"></i>
                        <b>ID Empresa:</b> {{ $tutor->id_empresa }}
                    </div>

                    <!-- Segunda columna -->
                    <div class="col-md-6 mb-3">
                        <i class="bi bi-building me-2"></i>
                        <b>Empresa:</b> {{ $tutor->empresa->nombre ?? 'Sin empresa asignada' }}
                    </div>

                    <div class="col-md-6 mb-3">
                        <i class="bi bi-columns-gap me-2"></i>
                        <b>Cargo:</b> {{$tutor->cargo}}
                    </div>
                </div>
                <div class="info-item mb-3 text-white">
                    <i class="bi bi-envelope"></i>
                    <b>Email:</b>
                    <span>{{$tutor->email}}</span>
                </div>
            </div>

            <div class="d-flex justify-content-start">
                <a href="{{ route('TutorEmpresarial.index') }}" class="btn btn-outline-secondary btn-lg shadow-sm">
                    <i class="bi bi-arrow-left-circle"></i> Volver
                </a>
            </div>
        </div>
    </div>
@endsection
