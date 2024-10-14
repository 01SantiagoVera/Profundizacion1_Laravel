@extends('layout.app')

@section('title', $empresa->nombre)
@section('content')
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center shadow">
                <div class="card-body">
                    <h4 class="mt-3">{{$empresa->nombre}}</h4>
                    <p><b>ID:</b> {{$empresa->id}}  <b>NIT:</b> {{$empresa->nit}}</p>
                    <div class="info-item">
                        <i class="bi bi-geo-alt"></i>
                        <span>{{$empresa->direccion}}</span>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <span>{{$empresa->email}}</span>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-telephone"></i>
                        <span>{{$empresa->telefono}}</span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href='{{route('empresa.index')}}' class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
@endsection
