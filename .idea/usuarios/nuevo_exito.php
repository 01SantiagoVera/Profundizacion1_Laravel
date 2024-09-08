<?php
include 'conexiones.php';


if (!$link) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Obtener los datos del formulario
$id = $_POST['id'] ?? 'Valor por defecto';
$Nombre = $_POST['nombre'] ?? '';
$Apellido = $_POST['apellido'] ?? '';
$email = $_POST['email'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$genero = $_POST['genero'] ?? 'Valor por defecto';
$ciudad = $_POST['Ciudad'] ?? 'Valor por defecto';


$query = "INSERT INTO usuario (ID, Nombre, ApellidoS, email, telefono, genero, ciudad) 
          VALUES ('$id', '$Nombre', '$Apellido', '$email', '$telefono', '$genero', '$ciudad')";

// Ejecutar la consulta
$result = mysqli_query($link, $query);

if ($result) {
    echo "<script> alert('Usuario registrado exitosamente'); location.href='tabla.php'; </script>";
} else {
    echo "<script> alert('No se pudo registrar el usuario'); location.href='tabla.php'; </script>";
}

asd
mysqli_close($link);
?>
