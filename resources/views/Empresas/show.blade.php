@extends('layout.app')

@section('title', $empresa->nombre)

@section('content')
    <div class="col py-3">
        <div class="container mt-5 bg-light p-4 rounded-3">
            <div class="card p-4 shadow-sm mb-4 bg-dark">
                <h4 class="fw-bold text-center text-uppercase text-white p-2 mb-3">{{$empresa->nombre}}</h4>

                <p class="text-white"><b>ID:</b> {{$empresa->id}}  <b>NIT:</b> {{$empresa->nit}}</p>

                <div class="info-item mb-3 text-white">
                    <i class="bi bi-geo-alt"></i>
                    <span>{{$empresa->direccion}}</span>
                </div>

                <div class="info-item mb-3 text-white">
                    <i class="bi bi-envelope"></i>
                    <span>{{$empresa->email}}</span>
                </div>

                <div class="info-item mb-3 text-white">
                    <i class="bi bi-telephone"></i>
                    <span>{{$empresa->telefono}}</span>
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
