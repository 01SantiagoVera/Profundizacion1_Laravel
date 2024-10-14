<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Sitio')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://unpkg.com/feather-icons"></script>


</head>
<body>
<div class="container-fluid">
    <div class="row flex-nowrap">
@include('Partials.sidebar')

    @yield('content')

    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
@yield('scripts') <!-- Si necesitas agregar scripts específicos para algunas vistas -->
<script>
    setTimeout(function() {
        var alertElement = document.getElementById('alert');
        if (alertElement) {
            alertElement.classList.remove('show');
            alertElement.classList.add('fade');

            // Esperar a que termine la transición antes de ocultar
            setTimeout(function() {
                alertElement.style.display = 'none';
            }, 150); // Asegúrate de que este tiempo coincide con la duración de la transición
        }
    }, 3000);
</script>
<script>
    feather.replace();  // Esto es para activar los íconos de Feather
</script>
</body>
</html>