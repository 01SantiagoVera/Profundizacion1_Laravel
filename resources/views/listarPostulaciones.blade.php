<!-- listarPostulaciones.blade.php -->
<h3>Estudiantes que han postulado a la oferta: {{ $oferta->titulo }}</h3>

<table class="table">
    <thead>
    <tr>
        <th>Nombre del Estudiante</th>
        <th>Fecha de Postulación</th>
    </tr>
    </thead>
    <tbody>
    @foreach($oferta->postulaciones as $postulacion)
        <tr>
            <td>{{ $postulacion->estudiante->nombre }}</td>
            <td>{{ $postulacion->created_at->format('d/m/Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
