<?php
include 'conexiones.php';

$id = $_GET['id'];


$sql = "SELECT * FROM usuario WHERE ID = $id";
$result = mysqli_query($link, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $usuario = mysqli_fetch_assoc($result);
} else {
    echo "<script> alert('Usuario no encontrado'); location.href='tabla.php'; </script>";
    exit;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Usuario</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .profile-pic {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: -75px;
            border: 5px solid white;
        }
        .info-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        .info-item i {
            font-size: 20px;
            margin-right: 10px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card text-center">
                <div class="card-body-dark">
                    <h4 class="mt-3"><?php echo $usuario['Nombre'] . ' ' . $usuario['Apellidos']; ?></h4>
                    <p><?php echo $usuario['Ciudad']; ?></p>

                    <div class="info-item">
                        <i class="bi bi-envelope"></i>
                        <span><?php echo $usuario['email']; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-telephone"></i>
                        <span><?php echo $usuario['telefono']; ?></span>
                    </div>
                    <div class="info-item">
                        <i class="bi bi-gender-ambiguous"></i>
                        <span><?php echo $usuario['genero']; ?></span>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="tabla.php" class="btn btn-secondary">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
