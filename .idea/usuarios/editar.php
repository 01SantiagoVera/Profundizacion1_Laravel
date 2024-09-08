<?php
include 'conexiones.php';
$id=$_GET["id"];
$sql="SELECT * FROM usuario WHERE id=$id";
$result=mysqli_query($link,$sql);
$row = $result-> fetch_assoc();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5 bg-light p-4">
    <div class="card p-4 shadow-sm mb-4">
        <h3 class="fw-bold text-center text-uppercase p-2 rounded mb-3">Editar Usuario</h3>
            <form action="actualizar.php?id=<?php echo $id; ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control rounded-3 shadow-sm" id="nombre" name="nombre" value="<?php echo $row['Nombre']; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Apellido</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-person-badge"></i></span>
                        <input type="text" class="form-control rounded-3 shadow-sm" id="apellido" name="apellido" value="<?php echo $row['Apellidos']; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="nombre" class="form-label">Email</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                        <input type="text" class="form-control rounded-3 shadow-sm" id="email" name="email" value="<?php echo $row['email']; ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="genero" class="form-label">Género</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-gender-ambiguous"></i></span>
                        <select class="form-select rounded-3 shadow-sm" id="genero" name="genero" value="<?php echo $row['genero']; ?>" >
                            <option value="Masculino">Masculino</option>
                            <option value="Femenino">Femenino</option>
                            <option value="Otro">Otro</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                        <input type="tel" class="form-control rounded-3 shadow-sm" id="telefono" name="telefono" value="<?php echo $row['telefono'] ?>" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                        <input type="text" class="form-control rounded-3 shadow-sm" id="ciudad" name="ciudad"  value="<?php echo $row['Ciudad']?>" required>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary btn-lg rounded-pill" aria-label="Actualizar">Actualizar</button>
                    <a href="tabla.php" class="btn btn-secondary btn-lg rounded-pill" aria-label="Cancelar">Cancelar</a>
                </div>
            </form>
    </div>
</div>
</body>
</html>
