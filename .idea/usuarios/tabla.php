<?php
include 'conexiones.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row mb-3">
        <div class="col-12 d-flex justify-content-between align-items-center">
            <h3 class="fw-bold text-center text-uppercase p-2 rounded mb-4">Usuarios</h3>
            <a href="Formulario.php" class="btn btn-primary btn-lg ms-2 rounded-pill shadow-sm">
                <i class="bi bi-plus-lg"></i> Nuevo usuario
            </a>
        </div>
    </div>

    <?php
    $query = "SELECT * FROM usuario ORDER BY nombre ASC";
    $result = mysqli_query($link,$query) or die(mysqli_error($link));


    ?>

    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Genero</th>
                    <th>Teléfono</th>
                    <th>Ciudad</th>
                    <th>Acciones</th>
                </tr>

                </thead>
                <tbody>
                <?php


                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>
                        <th>{$row['ID']}</th>
                        <td>{$row['Nombre']}</td>
                        <td>{$row['Apellidos']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['genero']}</td>
                        <td>{$row['telefono']}</td>
                        <td>{$row['Ciudad']}</td>
                        <td>
                            <a href='ver.php?id={$row['ID']}' class='btn btn-sm btn-outline-primary' title='Ver'>
                                <i class='bi bi-eye'></i>
                            </a>
                            <a href='editar.php?id={$row['ID']}' class='btn btn-sm btn-outline-success' title='Editar'>
                                <i class='bi bi-pencil'></i>
                            </a>
                            <a href='borrar.php?id={$row['ID']}' class='btn btn-sm btn-outline-danger' title='Borrar'>
                                <i class='bi bi-trash'></i>
                            </a>
                        </td>
                    </tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
